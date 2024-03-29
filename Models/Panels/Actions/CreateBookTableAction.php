<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels\Actions;

use Modules\Theme\Services\ThemeService;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

// -------- bases -----------

/**
 * Class CreateBookTableAction.
 */
class CreateBookTableAction extends XotBasePanelAction {
    public bool $onItem = true; // onlyContainer

    public bool $onContainer = false; // onlyContainer
    // mettere freccette su e giù

    public string $icon = '<i class="fa fa-plus"></i>';

    /**
     * @return mixed
     */
    public function handle() {
        $view = 'pub_theme::booking.modal.'.$this->getName();
        // dddx($view);

        return ThemeService::view($view)
            ->with('row', $this->row);
    }

    /**
     * @return string
     */
    public function postHandle() {
        $data = request()->all();
        dddx($data);
        $data['customer_id'] = \Auth::id();
        $data['status'] = 1;

        [$containers,$items] = params2ContainerItem();
        $shop = collect($items)->firstWhere('post_type', 'restaurant');

        $booking = $shop->bookings()->create($data);

        // in booking_items che ci metto??????

        /*
        $bookings = $shop->myBookingsWithThisRestaurant()
        ->where('day', \Carbon\Carbon::parse($data['day'])->format('y-m-d'))
        ->where('at', $data['at'])
        ->get();

        if ($bookings->count() > 0) {
            $bookings->first()->update($data);
        } else {
            $bookings = $shop->bookings()->create(['status' => 1]);
            $bookings->update($data);
        }
        */

        return 'fatto, controllare';
    }
}
