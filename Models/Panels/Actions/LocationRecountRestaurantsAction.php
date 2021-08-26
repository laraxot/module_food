<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels\Actions;

//--------- models ---------
use Modules\Food\Models\Location;
//-------- services --------
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

//-------- bases -----------

/**
 * Class LocationRecountRestaurantsAction.
 */
class LocationRecountRestaurantsAction extends XotBasePanelAction {
    public bool $onContainer = true;

    public bool $onItem = false; //onlyContainer

    public string $icon = '<i class="fas fa-sync"></i>';

    /**
     * Perform the action * @return \Illuminate\Http\RedirectResponse
     */
    public function handle() {
        Location::query()->where('id', '>', 0)->update(['restaurants_count' => null]);
        $sql = 'UPDATE locations SET restaurants_count=(
            SELECT COUNT(*) FROM restaurants WHERE restaurants.locality=locations.locality
            )';
        $conn = app(Location::class)->getConnection();
        $res = $conn->statement($sql);
        \Session::flash('status', 'restaurants_count aggiornato! '.$res);

        return redirect()->back();
    }
}
