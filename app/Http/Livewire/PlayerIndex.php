<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;
use App\Models\Player;
use App\Models\Club;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Livewire\WithPagination;
use Livewire\Component;

class PlayerIndex extends Component
{
    use WithFileUploads, WithPagination;
    
    public $showPlayerModal = false;
    public $club;
    public $clubId;
    public $name;
    public $role = 'Midfielder';
    public $roleOption = [
        'Goalkeeper',
        'Defender',
        'Midfielder',
        'Attacker',
    ];

    public $birth_date;
    public $birth_location;
    public $nationality;
    public $bio;
    public $height;
    public $weight;
    public $contract_from;
    public $contract_until;
    public $prefered_foot;
    public $shirt_number;
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
    public $perPage = 5;

    public $showConfirmModal = false;
    public $deleteId = '';

    protected $rule = [
        'name' => 'required',
            // 'file' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
    ];

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
        // IMAGE
        $filename = $new . '.' . $this->file->getClientOriginalName();
        $filePath = $this->file->storeAs(Player::UPLOAD_DIR, $filename, 'public');
        $resizedImage = $this->_resizeImage($this->file, $filename, Player::UPLOAD_DIR);

        $player = new Player();
        $player->club_id = $this->clubId;
        $player->name = $this->name;
        $player->slug = Str::slug($this->name);
        $player->role = $this->role;
        $player->birth_date = $this->birth_date;
        $player->birth_location = $this->birth_location;
        $player->nationality = $this->nationality;
        $player->bio = $this->bio;
        $player->contract_from = $this->contract_from;
        $player->contract_until = $this->contract_until;
        $player->height = $this->height;
        $player->weight = $this->weight;
        $player->prefered_foot = $this->prefered_foot;
        $player->shirt_number = $this->shirt_number;
        $player->position = $this->position;
        $player->status = $this->playerStatus;

        if (!empty($this->file)) {
            $player->origin = $filePath;
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
        $this->clubId = $player->club_id;
        $this->name = $player->name;
        $this->role = $player->role;
        $this->birth_date = $player->birth_date;
        $this->birth_location = $player->birth_location;
        $this->nationality = $player->nationality;
        $this->bio = $player->bio;
        $this->contract_from = $player->contract_from;
        $this->contract_until = $player->contract_until;
        $this->oldImage = $player->small;
        $this->playerStatus = $player->status;

        $this->showPlayerModal = true;
    }
    
    public function updatePlayer()
    {
        $player = Player::findOrFail($this->playerId);
        $this->validate();
  
        $new = Str::slug($this->name) . '_' . time();
        $filename = $new . '.' . $this->file->getClientOriginalName();
        
        if ($this->playerId) {
            if ($player) {
               
                // IMAGE
                $filePath = $this->file->storeAs(Player::UPLOAD_DIR, $filename, 'public');
                $resizedImage = $this->_resizeImage($this->file, $filename, Player::UPLOAD_DIR);

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

                $player = Player::where('id', $this->playerId);
                $player->club_id = $this->clubId;
                $player->name = $this->name;
                $player->slug = Str::slug($this->name);
                $player->role = $this->role;
                $player->birth_date = $this->birth_date;
                $player->birth_location = $this->birth_location;
                $player->nationality = $this->nationality;
                $player->bio = $this->bio;
                $player->contract_from = $this->contract_from;
                $player->contract_until = $this->contract_until;
                $player->height = $this->height;
                $player->weight = $this->weight;
                $player->prefered_foot = $this->prefered_foot;
                $player->shirt_number = $this->shirt_number;
                $player->position = $this->position;
                $player->status = $this->playerStatus;

                if (!empty($this->file)) {
                    // delete image
			        $this->deleteImage($this->playerId);

                    $player->origin = $filePath;
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
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.player-index', [
            'players' => Player::search('name', $this->search)->orderBy('name', $this->sort)->paginate($this->perPage),
            'clubs' => Club::OrderBy('name', 'asc')->get(),
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
}
