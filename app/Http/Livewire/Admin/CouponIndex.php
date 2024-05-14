<?php

namespace App\Http\Livewire\Admin;

use App\Models\Coupon;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\Component;

class CouponIndex extends Component
{
    use WithPagination;
 
    public $showCouponModal = false;
    public $title;
    public $code;
    public $startDate;
    public $expireDate;
    public $minPurchase;
    public $maxDiscount;
    public $discount;
    public $discountType;
    public $discountOption = [
        'amount',
        'percent',
    ];
    public $couponType;
    public $couponOption = [
        'free_delivery',
        'first_order',
        'default',
    ];
    public $limit;
    public $data;
    public $totalUses;
    public $couponId;

    public $couponStatus = 'inactive';
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
        'title' => 'required|max:255',
        'code' => 'required|unique:coupons,code',
    ];

    public function mount()
    {
        $this->startDate = today()->format('Y-m-d');
        $this->expireDate = today()->format('Y-m-d');
    }

    public function showCreateModal()
    {
        $this->showCouponModal = true;
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
        Coupon::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Coupon deleted successfully']);
    }

    public function createCoupon()
    {
        $this->validate();
        
        Coupon::create([
          'title' => $this->title,
          'code' => $this->code,
          'start_date' => $this->startDate,
          'expire_date' => $this->expireDate,
          'min_purchase' => $this->minPurchase,
          'max_discount' => $this->maxDiscount,
          'discount' => $this->discount,
          'discount_type' => $this->discountType,
          'coupon_type' => $this->couponType,
          'limit' => $this->limit,
        //   'data' => $this->data,
        //   'total_uses' => $this->totalUses,
          'status' => $this->couponStatus,
      ]);
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Coupon created successfully']);
    }

    public function showEditModal($couponId)
    {
        $this->reset(['title']);
        $this->couponId = $couponId;
        $coupon = Coupon::find($couponId);
        $this->title = $coupon->title;
        $this->code = $coupon->code;
        $this->startDate = $coupon->start_date;
        $this->expireDate = $coupon->expire_date;
        $this->minPurchase = $coupon->min_purchase;
        $this->maxDiscount = $coupon->max_discount;
        $this->discount = $coupon->discount;
        $this->discountType = $coupon->discount_type;
        $this->couponType = $coupon->coupon_type;
        $this->limit = $coupon->limit;
        $this->couponStatus = $coupon->status;
        // $this->data = $coupon->data;
        // $this->totalUses = $coupon->total_uses;

        $this->showCouponModal = true;
    }
    
    public function updateCoupon()
    {
        $this->validate();

        $coupon = Coupon::findOrFail($this->couponId);
        $coupon->update([
            'title' => $this->title,
            'code' => $this->code,
            'start_date' => $this->startDate,
            'expire_date' => $this->expireDate,
            'min_purchase' => $this->minPurchase,
            'max_discount' => $this->maxDiscount,
            'discount' => $this->discount,
            'discount_type' => $this->discountType,
            'coupon_type' => $this->couponType,
            'limit' => $this->limit,
            // 'data' => $this->data,
            // 'total_uses' => $this->totalUses,
            'status' => $this->couponStatus,
        ]);
        $this->reset();
        $this->showCouponModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Coupon updated successfully']);
    }

    public function deleteCoupon($couponId)
    {
        $coupon = Coupon::findOrFail($couponId);
        $coupon->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Coupon deleted successfully']);
    }

    public function closeCouponModal()
    {
        $this->showCouponModal = false;
        $this->reset(
            [
                'couponId',
                'title',
            ]
        );
    }

    public function resetFilters()
    {
        $this->reset(['search', 'sort', 'perPage']);
    }

    public function render()
    {
        $key = explode(' ', $this->search);
        $coupons = Coupon::where(function ($q) use ($key) {
            foreach ($key as $value) {
                $q->orWhere('title', 'like', "%{$value}%")
                ->orWhere('code', 'like', "%{$value}%");
            }
        })->orderBy('id', $this->sort)->paginate($this->perPage);

        return view('livewire.admin.coupon-index', [
            'coupons' => Coupon::liveSearch('title', $this->search)->orderBy('title', $this->sort)->paginate($this->perPage),
        ])->layout('components.layouts.app');
    }
}
