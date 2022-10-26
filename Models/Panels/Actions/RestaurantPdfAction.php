<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels\Actions;

use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

// -------- bases -----------

/**
 * Class RestaurantPdfAction.
 */
class RestaurantPdfAction extends XotBasePanelAction {
    public bool $onItem = true; // onlyContainer

    public bool $onContainer = false; // onlyContainer
    // mettere freccette su e giù

    public string $icon = '<i class="fa fa-edit"></i>';

    /**
     * @return mixed
     */
    public function handle() {
        return $this->pdf(['pdforientation' => 'L', 'view' => 'pub_theme::restaurant.show.pdf']);
    }
}
