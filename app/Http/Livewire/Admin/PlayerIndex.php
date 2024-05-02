<?php

namespace App\Http\Livewire\Admin;

use App\Exports\ExportPlayer;
use Livewire\WithFileUploads;
use App\Models\Player;
use App\Models\Position;
use App\Models\Club;
use App\Models\Country;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Livewire\WithPagination;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;

class PlayerIndex extends Component
{
    use WithFileUploads, WithPagination;
    
    public $selectedClub;
    public $counter = 0;
    public $showPlayerModal = false;
    public $sizeTol = Player::LARGE;
    public $club;
    // public $selectedClub;
    public $name;
    public $birthDate;
    public $birthLocation;
    public $nationality;
    public $bio;
    public $height;
    public $weight;
    public $age;
    public $level;
    public $levelOption = [
        'senior',
        'u20',
        'u16',
    ];
    public $gender;
    public $genderOption = [
        'men',
        'women',
    ];
    public $code;
    public $facebook;
    public $instagram;
    public $twitter;
    public $contractFrom;
    public $contractUntil;
    public $preferedFoot;
    public $footOption = [
        'left',
        'right',
        'both',
    ];
    public $shirtNumber;
    public $position;

    public $playerId;
    public $file;
    public $oldImage;
    public $playerStatus = 'inactive';
    public $statuses = [
        'active',
        'inactive'
    ];

    public $search = '';
    public $sort = 'asc';
    public $perPage = 40;

    public $showPlayerDetailModal = false;
    public $showConfirmModal = false;
    public $deleteId = '';

    protected $rules = [
        'name' => 'required',
            // 'file' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
    ];

    public function mount()
    {
        $this->contractFrom = today()->format('Y-m-d');
        $this->contractUntil = today()->format('Y-m-d');
        $this->birthDate = today()->format('Y-m-d');
        $this->selectedClub = 11;
    } 

    public function showCreateModal()
    {
        $this->showPlayerModal = true;
    }

    public function closeConfirmModal()
    {
        $this->showConfirmModal = false;
    }

    public function deleteId($id)
    {
        $this->showConfirmModal = true;
        $this->deleteId = $id;
    }

    public function delete()
    {
        Player::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Player deleted successfully']);
    }

    public function createPlayer()
    {
        $this->validate();
  
        $new = Str::slug($this->name) . '_' . time();

        $player = new Player();
        $player->club_id = $this->selectedClub;
        $player->level = 'senior';
        $player->gender = 'men';
        $player->name = $this->name;
        $player->slug = Str::slug($this->name);
        $player->birth_date = $this->birthDate;
        $player->birth_location = $this->birthLocation;
        $player->country_id = $this->nationality;
        $player->bio = $this->bio;
        $player->contract_from = $this->contractFrom;
        $player->contract_until = $this->contractUntil;
        $player->height = $this->height;
        $player->weight = $this->weight;
        $player->prefered_foot = $this->preferedFoot;
        $player->shirt_number = $this->shirtNumber;
        $player->position_id = $this->position;
        $player->facebook = $this->facebook;
        $player->instagram = $this->instagram;
        $player->twitter = $this->twitter;
        $player->status = $this->playerStatus;

        if (!empty($this->file)) {
            // IMAGE
            $filename = $new . '.' . $this->file->getClientOriginalName();
            $filePath = $this->file->storeAs(Player::UPLOAD_DIR, $filename, 'public');
            $resizedImage = $this->_resizeImage($this->file, $filename, Player::UPLOAD_DIR);

            $player->original = $filePath;
            $player->small =$resizedImage['small'];
            $player->medium = $resizedImage['medium'];
            $player->large = $resizedImage['large'];
        }

        $player->save();

        // Player::create([
        //     'name' => $this->name,
        //     'slug' => Str::slug($this->name),
        //     'city' => $this->city,
        //     'capacity' => $this->capacity,
        //     'seat_quality' => $this->seatQuality,
        //     'vip' => $this->vipStatus,
        //     'original' => $filePath,
        //     'small' => $resizedImage['small'],
        //     'extra_large' => $resizedImage['extra_large'],
        //     'status' => $this->playerStatus,
        // ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Player created successfully']);
    }

    public function showEditModal($playerId)
    {
        $this->reset(['name']);
        $this->playerId = $playerId;
        $player = Player::find($playerId);
        $this->selectedClub = $player->club_id;
        $this->level = $player->level;
        $this->gender = $player->gender;
        $this->name = $player->name;
        $this->position = $player->position_id;
        $this->birthDate = $player->birth_date;
        $this->birthLocation = $player->birth_location;
        $this->nationality = $player->country_id;
        $this->bio = $player->bio;
        $this->contractFrom = $player->contract_from;
        $this->contractUntil = $player->contract_until;
        $this->preferedFoot = $player->prefered_foot;
        $this->height = $player->height;
        $this->weight = $player->weight;
        $this->shirtNumber = $player->shirt_number;
        $this->oldImage = $player->small;
        $this->facebook = $player->facebook;
        $this->instagram = $player->instagram;
        $this->twitter = $player->twitter;
        $this->playerStatus = $player->status;

        $this->showPlayerModal = true;
    }

    public function showDetailModal($playerId)
    {
        $this->reset(['name']);
        $this->playerId = $playerId;
        $player = Player::find($playerId);
        $this->selectedClub = $player->club_id;
        $this->level = $player->level;
        $this->gender = $player->gender;
        $this->name = $player->name;
        $this->position = $player->position->name;
        $this->birthDate = $player->birth_date;
        $this->birthLocation = $player->birth_location;
        $this->bio = $player->bio;
        $this->contractFrom = $player->contract_from;
        $this->contractUntil = $player->contract_until;
        $this->preferedFoot = $player->prefered_foot;
        $this->shirtNumber = $player->shirt_number;
        $this->height = $player->height;
        $this->weight = $player->weight;
        $this->nationality = $player->country_id;
        $this->code = $player->country->code;
        $this->age = Carbon::parse($player->birth_date)->age;
        $this->oldImage = $player->small;
        $this->facebook = $player->facebook;
        $this->instagram = $player->instagram;
        $this->twitter = $player->twitter;

        $this->showPlayerDetailModal = true;
    }

    public function closeDetailModal()
    {
        $this->reset();
        $this->showPlayerDetailModal = false;
    }
    
    public function updatePlayer()
    {
        
        $this->validate();

        $player = Player::findOrFail($this->playerId);
  
        $new = Str::slug($this->name) . '_' . time();
        
        if ($this->playerId) {
            if ($player) {

                // $player->update([
                //     'name' => $this->name,
                //     'slug' => Str::slug($this->name),
                //     'city' => $this->city,
                //     'capacity' => $this->capacity,
                //     'seat_quality' => $this->seatQuality,
                //     'vip' => $this->vipStatus,
                //     'original' => $filePath,
                //     'small' => $resizedImage['small'],
                //     'extra_large' => $resizedImage['extra_large'],
                //     'status' => $this->playerStatus,
                // ]);

                // $player = Player::where('id', $this->playerId);
                $player->club_id = $this->selectedClub;
                $player->level = 'senior';
                $player->gender = 'men';
                $player->name = $this->name;
                $player->slug = Str::slug($this->name);
                $player->birth_date = $this->birthDate;
                $player->birth_location = $this->birthLocation;
                $player->country_id = $this->nationality;
                $player->bio = $this->bio;
                $player->contract_from = $this->contractFrom;
                $player->contract_until = $this->contractUntil;
                $player->height = $this->height;
                $player->weight = $this->weight;
                $player->prefered_foot = $this->preferedFoot;
                $player->shirt_number = $this->shirtNumber;
                $player->position_id = $this->position;
                $player->facebook = $this->facebook;
                $player->instagram = $this->instagram;
                $player->twitter = $this->twitter;
                $player->status = $this->playerStatus;

                if (!empty($this->file)) {
                    // delete image
			        $this->deleteImage($this->playerId);

                     // IMAGE
                    $filename = $new . '.' . $this->file->getClientOriginalName();
                    $filePath = $this->file->storeAs(Player::UPLOAD_DIR, $filename, 'public');
                    $resizedImage = $this->_resizeImage($this->file, $filename, Player::UPLOAD_DIR);

                    $player->original = $filePath;
                    $player->small =$resizedImage['small'];
                    $player->medium = $resizedImage['medium'];
                    $player->large = $resizedImage['large'];
                }
                
                $player->save();
            }
        }

        $this->reset();
        $this->showPlayerModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Player updated successfully']);
    }

    public function deletePlayer($playerId)
    {
        $player = Player::findOrFail($playerId);
        // delete image
		$this->deleteImage($this->playerId);
        
        $player->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Player deleted successfully']);
    }

    public function closePlayerModal()
    {
        $this->showPlayerModal = false;
        $this->reset([
            'playerId',
            'name',
            'birthDate',
            'birthLocation',
            'nationality',
            'bio',
            'contractFrom',
            'contractUntil',
            'height',
            'weight',
            'preferedFoot',
            'shirtNumber',
            'position',
            'facebook',
            'instagram',
            'twitter',
            'playerStatus',
        ]);
    }

    public function resetFilters()
    {
        $this->reset(['search', 'sort', 'perPage']);
    }

    public function render()
    {
        return view('livewire.admin.player-index', [
            'players' => Player::liveSearch('name', $this->search)->where('level', 'senior')->where('gender', 'men')->orderBy('name', $this->sort)->paginate($this->perPage),
            'clubs' => Club::OrderBy('name', 'asc')->get(),
            'teams' => Club::OrderBy('id', 'asc')->get()->toArray(),
            'positionOption' => Position::OrderBy('name', 'asc')->get(),
            'countries' => Country::orderBy('name', 'asc')->get(),
        ]);
    }

    private function _resizeImage($image, $fileName, $folder)
	{
		$resizedImage = [];

        // SMALL
		$smallImageFilePath = $folder . '/small/' . $fileName;
		$size = explode('x', Player::SMALL);
		list($width, $height) = $size;

		$smallImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $smallImageFilePath, $smallImageFile)) {
			$resizedImage['small'] = $smallImageFilePath;
		}
		
        // MEDIUM
		$mediumImageFilePath = $folder . '/medium/' . $fileName;
		$size = explode('x', Player::MEDIUM);
		list($width, $height) = $size;

		$mediumImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $mediumImageFilePath, $mediumImageFile)) {
			$resizedImage['medium'] = $mediumImageFilePath;
		}

        // LARGE
		$largeImageFilePath = $folder . '/large/' . $fileName;
		$size = explode('x', Player::LARGE);
		list($width, $height) = $size;

		$largeImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $largeImageFilePath, $largeImageFile)) {
			$resizedImage['large'] = $largeImageFilePath;
		}

        // EXTRA_LARGE
		// $extraLargeImageFilePath  = $folder . '/xlarge/' . $fileName;
		// $size = explode('x', Player::EXTRA_LARGE);
		// list($width, $height) = $size;

		// $extraLargeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $extraLargeImageFilePath, $extraLargeImageFile)) {
		// 	$resizedImage['extra_large'] = $extraLargeImageFilePath;
		// }

		return $resizedImage;
	}

    public function deleteImage($id = null) {
        $playerImage = Player::where(['id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$playerImage->original)) {
            Storage::delete($path.$playerImage->original);
		}
		
        if (Storage::exists($path.$playerImage->small)) {
            Storage::delete($path.$playerImage->small);
        }   

		if (Storage::exists($path.$playerImage->medium)) {
            Storage::delete($path.$playerImage->medium);
        }

        if (Storage::exists($path.$playerImage->large)) {
            Storage::delete($path.$playerImage->large);
        }

        // if (Storage::exists($path.$playerImage->extra_large)) {
        //     Storage::delete($path.$playerImage->extra_large);
        // }
             
        return true;
    }

    public function routeToDownloadExcel()
    {
        return redirect('/admin/reports/player');
    }

    public function export()
    {
        return Excel::download(new ExportPlayer, 'players.xlsx');
    }
}
