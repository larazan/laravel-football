<?php

namespace App\Http\Livewire;

use App\Models\MatchReport;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Component;

class MatchReportIndex extends Component
{
    use WithFileUploads, WithPagination;
    
    public $showMatchReportModal = false;
    public $matchId;
    public $report;
    public $matchReportId;
    public $file;
    public $oldImage;
    public $matchReportStatus = 'inactive';
    public $statuses = [
        'active',
        'inactive'
    ];

    public $search = '';
    public $sort = 'asc';
    public $perPage = 10;

    public $showConfirmModal = false;
    public $deleteId = '';

    protected $rules = [
        'report' => 'required',
        // 'file' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
    ];

    public function mount($matchId)
    {
        $this->matchId = $matchId;
    }

    public function showCreateModal()
    {
        $this->showMatchReportModal = true;
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
        MatchReport::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'MatchReport deleted successfully']);
    }

    public function createMatchReport()
    {
        $this->validate();
  
        $new = Str::random(5) . '_' . time();

        $matchReport = new MatchReport();
        $matchReport->report = $this->report;
        $matchReport->match_id = $this->matchId;
      

        if (!empty($this->file)) {
            // IMAGE
            $filename = $new . '.' . $this->file->getClientOriginalName();
            $filePath = $this->file->storeAs(MatchReport::UPLOAD_DIR, $filename, 'public');
            $resizedImage = $this->_resizeImage($this->file, $filename, MatchReport::UPLOAD_DIR);

            $matchReport->original = $filePath;
            $matchReport->medium = $resizedImage['medium'];
        }

        $matchReport->save();

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'MatchReport created successfully']);
    }

    public function showEditModal($matchReportId)
    {
        $this->reset(['name']);
        $this->matchReportId = $matchReportId;
        $matchReport = MatchReport::find($matchReportId);
        $this->report = $matchReport->report;
        $this->oldImage = $matchReport->medium;

        $this->showMatchReportModal = true;
    }
    
    public function updateMatchReport()
    {
        
        $this->validate();

        $matchReport = MatchReport::findOrFail($this->matchReportId);
  
        $new = Str::random(5) . '_' . time();
        
        if ($this->matchReportId) {
            if ($matchReport) {

                // $matchReport = MatchReport::where('id', $this->matchReportId);
                $matchReport->report = $this->report;
                $matchReport->match_id = $this->matchId;

                if (!empty($this->file)) {
                    // delete image
			        $this->deleteImage($this->matchReportId);

                     // IMAGE
                    $filename = $new . '.' . $this->file->getClientOriginalName();
                    $filePath = $this->file->storeAs(MatchReport::UPLOAD_DIR, $filename, 'public');
                    $resizedImage = $this->_resizeImage($this->file, $filename, MatchReport::UPLOAD_DIR);

                    $matchReport->original = $filePath;
                    $matchReport->medium = $resizedImage['medium'];
                }
                
                $matchReport->save();
            }
        }

        $this->reset();
        $this->showMatchReportModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'MatchReport updated successfully']);
    }

    public function deleteMatchReport($matchReportId)
    {
        $matchReport = MatchReport::findOrFail($matchReportId);
        // delete image
		$this->deleteImage($this->matchReportId);
        
        $matchReport->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'MatchReport deleted successfully']);
    }

    public function closeMatchReportModal()
    {
        $this->showMatchReportModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.match-report-index', [
            'reports' => MatchReport::search('id', $this->search)->orderBy('id', $this->sort)->paginate($this->perPage),
        ]);
    }

    private function _resizeImage($image, $fileName, $folder)
	{
		$resizedImage = [];

        // SMALL
		// $smallImageFilePath = $folder . '/small/' . $fileName;
		// $size = explode('x', MatchReport::SMALL);
		// list($width, $height) = $size;

		// $smallImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $smallImageFilePath, $smallImageFile)) {
		// 	$resizedImage['small'] = $smallImageFilePath;
		// }
		
        // MEDIUM
		$mediumImageFilePath = $folder . '/medium/' . $fileName;
		$size = explode('x', MatchReport::MEDIUM);
		list($width, $height) = $size;

		$mediumImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $mediumImageFilePath, $mediumImageFile)) {
			$resizedImage['medium'] = $mediumImageFilePath;
		}

        // LARGE
		// $largeImageFilePath = $folder . '/large/' . $fileName;
		// $size = explode('x', MatchReport::LARGE);
		// list($width, $height) = $size;

		// $largeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $largeImageFilePath, $largeImageFile)) {
		// 	$resizedImage['large'] = $largeImageFilePath;
		// }

        // EXTRA_LARGE
		// $extraLargeImageFilePath  = $folder . '/xlarge/' . $fileName;
		// $size = explode('x', MatchReport::EXTRA_LARGE);
		// list($width, $height) = $size;

		// $extraLargeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $extraLargeImageFilePath, $extraLargeImageFile)) {
		// 	$resizedImage['extra_large'] = $extraLargeImageFilePath;
		// }

		return $resizedImage;
	}

    public function deleteImage($id = null) {
        $matchReportImage = MatchReport::where(['id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$matchReportImage->original)) {
            Storage::delete($path.$matchReportImage->original);
		}
		
        // if (Storage::exists($path.$matchReportImage->small)) {
        //     Storage::delete($path.$matchReportImage->small);
        // }   

		if (Storage::exists($path.$matchReportImage->medium)) {
            Storage::delete($path.$matchReportImage->medium);
        }

        // if (Storage::exists($path.$matchReportImage->large)) {
        //     Storage::delete($path.$matchReportImage->large);
        // }

        // if (Storage::exists($path.$matchReportImage->extra_large)) {
        //     Storage::delete($path.$matchReportImage->extra_large);
        // }
             
        return true;
    }
}
