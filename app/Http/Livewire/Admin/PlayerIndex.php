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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Livewire\WithPagination;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;

class PlayerIndex extends Component
{
    public $clubSelect;
    public $selectedPosition;
    public $selectedPos = [5,6,7];
    public $multiselect = [];
    public $positions;
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

    public $subCategory;
    public $selected = [];

    protected $rules = [
        'name' => 'required',
            // 'file' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
    ];

    public function mount()
    {
        $this->contractFrom = today()->format('Y-m-d');
        $this->contractUntil = today()->format('Y-m-d');
        $this->birthDate = today()->format('Y-m-d');
        $this->selectedClub = 1;

        $this->subCategory = collect([
            [
                'value' => 1,
                'text' => 'Biscuit',
                'selected' => false
            ],
            [
                'value' => 2,
                'text' => 'Chocolate',
                'selected' => false
            ],
            [
                'value' => 3,
                'text' => 'Wafer',
                'selected' => false
            ],
            [
                'value' => 4,
                'text' => 'Cookies',
                'selected' => false
            ],
            [
                'value' => 5,
                'text' => 'Sandwich',
                'selected' => false
            ],
            [
                'value' => 6,
                'text' => 'Kebab',
                'selected' => false
            ],
            [
                'value' => 7,
                'text' => 'Egg Roll',
                'selected' => false
            ],
            [
                'value' => 8,
                'text' => 'Milo',
                'selected' => false
            ],
            [
                'value' => 9,
                'text' => 'Kitkat',
                'selected' => false
            ],
            [
                'value' => 10,
                'text' => 'Mashmellow',
                'selected' => false
            ],
            [
                'value' => 11,
                'text' => 'Prinkle',
                'selected' => false
            ],
            [
                'value' => 12,
                'text' => 'Fritos',
                'selected' => false
            ],
            [
                'value' => 13,
                'text' => 'Hershey',
                'selected' => false
            ],
        ]);

        $newArr = [];
        $sPos = [
            [
                'id' => 10,
                'name' => 'LWB',
                'selected' => true
            ],
            [
                'id' => 17,
                'name' => 'ST',
                'selected' => true
            ],
        ];
        foreach($sPos as $key => $s) {
            array_push($newArr, $s['id']);
        }
        $this->selectedPosition = $newArr;

        // Position 
        $statePos = [];
        $pos = Position::whereIn('id', $this->selectedPos)->get();
        foreach($pos as $p) {
            array_push($statePos, [
                'id' => $p->id,
                'name' => $p->abbreviation,
            ]);
        }

        $this->multiselect = $statePos;

        $newPos = [];
        $positions = Position::get();
        foreach($positions as $p) {
            array_push($newPos, [
                'id' => $p->id,
                'name' => $p->abbreviation,
            ]);
        }

        $this->positions = $newPos;
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
        dd($this->multiselect);
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
        // $player->position_id = $this->position;
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

        // position
        // sync to pivot table
        $arrayPosition = [];
        foreach($this->multiselect as $key => $s) {
            array_push($arrayPosition, $s['id']);
        }
        $player->positions()->sync($arrayPosition);

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
        $this->reset(['name',]);
        $this->playerId = $playerId;
        $player = Player::find($playerId);
        $this->selectedClub = $player->club_id;
        $this->level = $player->level;
        $this->gender = $player->gender;
        $this->name = $player->name;
        // $this->position = $player->position_id;
        $this->multiselect = $player->positions->pluck('id')->toArray();
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
        // $this->position = $player->position->name;
        $this->multiselect = $player->positions->pluck('id')->toArray();
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
        $this->code = $player->country ? $player->country->code : null;
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
                // $player->position_id = $this->position;
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

                // position
                // sync to pivot table
                $arrayPosition = [];
                foreach($this->multiselect as $key => $s) {
                    array_push($arrayPosition, $s['id']);
                }
                $player->positions()->sync($arrayPosition);
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
            'selectedClub'
        ]);
    }

    public function resetFilters()
    {
        $this->reset(['search', 'sort', 'perPage', 'selectedClub']);
    }

    public function render()
    {
        return view('livewire.admin.player-index', [
            'players' => Player::liveSearch('name', $this->search)->where('level', 'senior')->where('gender', 'men')->orderBy('name', $this->sort)->paginate($this->perPage),
            'clubs' => Club::Select('id', 'name', 'logo')->orderBy('id', 'asc')->get(),
            'teams' => Club::Select('id', 'name', 'logo')->orderBy('id', 'asc')->get()->toArray(),
            'positionOption' => Position::OrderBy('name', 'asc')->get(),
            'countries' => Country::orderBy('name', 'asc')->get(),
        ])->layout('components.layouts.app');
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
        $playerImage = Player::where(['value' => $id])->first();
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
