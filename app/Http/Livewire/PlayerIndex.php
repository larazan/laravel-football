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
    
    public $counter = 0;
    public $showPlayerModal = false;
    public $sizeTol = Player::LARGE;
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

    public $birthDate;
    public $birthLocation;
    public $nationality;
    public $bio;
    public $height;
    public $weight;
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
    public $positionOption = [
        'Goalkeeper',
        'Right Back',
        'Center Back',
        'Left Back',
        'Right Wingback',
        'Left Wingback',
        'Defensive Midfielder',
        'Right Winger',
        'Midfielder Center',
        'Deep Lying Playmaker',
        'Left Winger',
        'Inferted Winger',
        'Inside Forward',
        'Attacking Midfielder',
        'Advance Playmaker',
        'Second Stricker',
        'Center Forward',
    ];

    public $countries = [
        'Afghanistan',
        'Albania',
        'Algeria',
        'Andorra',
        'Angola',
        'Antigua & Deps',
        'Argentina',
        'Armenia',
        'Australia',
        'Austria',
        'Azerbaijan',
        'Bahamas',
        'Bahrain',
        'Bangladesh',
        'Barbados',
        'Belarus',
        'Belgium',
        'Belize',
        'Benin',
        'Bermuda',
        'Bhutan',
        'Bolivia',
        'Bosnia Herzegovina',
        'Botswana',
        'Brazil',
        'Brunei',
        'Bulgaria',
        'Burkina',
        'Burundi',
        'Cambodia',
        'Cameroon',
        'Canada',
        'Cape Verde',
        'Central African Rep',
        'Chad',
        'Chile',
        'China',
        'Colombia',
        'Comoros',
        'Congo',
        'Congo (Democratic Rep)',
        'Costa Rica',
        'Croatia',
        'Cuba',
        'Cyprus',
        'Czech Republic',
        'Denmark',
        'Djibouti',
        'Dominica',
        'Dominican Republic',
        'East Timor',
        'Ecuador',
        'Egypt',
        'El Salvador',
        'Equatorial Guinea',
        'Eritrea',
        'Estonia',
        'Eswatini',
        'Ethiopia',
        'Fiji',
        'Finland',
        'France',
        'Gabon',
        'Gambia',
        'Georgia',
        'Germany',
        'Ghana',
        'Greece',
        'Grenada',
        'Guatemala',
        'Guinea',
        'Guinea-Bissau',
        'Guyana',
        'Haiti',
        'Honduras',
        'Hungary',
        'Iceland',
        'India',
        'Indonesia',
        'Iran',
        'Iraq',
        'Ireland (Republic)',
        'Israel',
        'Italy',
        'Ivory Coast',
        'Jamaica',
        'Japan',
        'Jordan',
        'Kazakhstan',
        'Kenya',
        'Kiribati',
        'Korea North',
        'Korea South',
        'Kosovo',
        'Kuwait',
        'Kyrgyzstan',
        'Laos',
        'Latvia',
        'Lebanon',
        'Lesotho',
        'Liberia',
        'Libya',
        'Liechtenstein',
        'Lithuania',
        'Luxembourg',
        'Macedonia',
        'Madagascar',
        'Malawi',
        'Malaysia',
        'Maldives',
        'Mali',
        'Malta',
        'Marshall Islands',
        'Mauritania',
        'Mauritius',
        'Mexico',
        'Micronesia',
        'Moldova',
        'Monaco',
        'Mongolia',
        'Montenegro',
        'Morocco',
        'Mozambique',
        'Myanmar',
        'Namibia',
        'Nauru',
        'Nepal',
        'Netherlands',
        'New Zealand',
        'Nicaragua',
        'Niger',
        'Nigeria',
        'Norway',
        'Oman',
        'Pakistan',
        'Palau',
        'Palestine',
        'Panama',
        'Papua New Guinea',
        'Paraguay',
        'Peru',
        'Philippines',
        'Poland',
        'Portugal',
        'Qatar',
        'Romania',
        'Russian Federation',
        'Rwanda',
        'St Kitts & Nevis',
        'St Lucia',
        'Saint Vincent & the Grenadines',
        'Samoa',
        'San Marino',
        'Sao Tome & Principe',
        'Saudi Arabia',
        'Senegal',
        'Serbia',
        'Seychelles',
        'Sierra Leone',
        'Singapore',
        'Slovakia',
        'Slovenia',
        'Solomon Islands',
        'Somalia',
        'South Africa',
        'South Sudan',
        'Spain',
        'Sri Lanka',
        'Sudan',
        'Suriname',
        'Sweden',
        'Switzerland',
        'Syria',
        'Taiwan',
        'Tajikistan',
        'Tanzania',
        'Thailand',
        'Togo',
        'Tonga',
        'Trinidad & Tobago',
        'Tunisia',
        'Turkey',
        'Turkmenistan',
        'Tuvalu',
        'Uganda',
        'Ukraine',
        'United Arab Emirates',
        'United Kingdom',
        'United States',
        'Uruguay',
        'Uzbekistan',
        'Vanuatu',
        'Vatican City',
        'Venezuela',
        'Vietnam',
        'Yemen',
        'Zambia',
        'Zimbabwe',
    ];

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
    public $perPage = 10;

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
        $player->club_id = $this->clubId;
        $player->name = $this->name;
        $player->slug = Str::slug($this->name);
        $player->role = $this->role;
        $player->birth_date = $this->birthDate;
        $player->birth_location = $this->birthLocation;
        $player->nationality = $this->nationality;
        $player->bio = $this->bio;
        $player->contract_from = $this->contractFrom;
        $player->contract_until = $this->contractUntil;
        $player->height = $this->height;
        $player->weight = $this->weight;
        $player->prefered_foot = $this->preferedFoot;
        $player->shirt_number = $this->shirtNumber;
        $player->position = $this->position;
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
        $this->clubId = $player->club_id;
        $this->name = $player->name;
        $this->role = $player->role;
        $this->birthDate = $player->birth_date;
        $this->birthLocation = $player->birth_location;
        $this->nationality = $player->nationality;
        $this->bio = $player->bio;
        $this->contractFrom = $player->contract_from;
        $this->contractUntil = $player->contract_until;
        $this->preferedFoot = $player->prefered_foot;
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
        $this->clubId = $player->club_id;
        $this->name = $player->name;
        $this->role = $player->role;
        $this->birthDate = $player->birth_date;
        $this->birthLocation = $player->birth_location;
        $this->nationality = $player->nationality;
        $this->bio = $player->bio;
        $this->contractFrom = $player->contract_from;
        $this->contractUntil = $player->contract_until;
        $this->preferedFoot = $player->prefered_foot;
        $this->shirtNumber = $player->shirt_number;
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
                $player->club_id = $this->clubId;
                $player->name = $this->name;
                $player->slug = Str::slug($this->name);
                $player->role = $this->role;
                $player->birth_date = $this->birthDate;
                $player->birth_location = $this->birthLocation;
                $player->nationality = $this->nationality;
                $player->bio = $this->bio;
                $player->contract_from = $this->contractFrom;
                $player->contract_until = $this->contractUntil;
                $player->height = $this->height;
                $player->weight = $this->weight;
                $player->prefered_foot = $this->preferedFoot;
                $player->shirt_number = $this->shirtNumber;
                $player->position = $this->position;
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
