<<<<<<< HEAD
<?php

namespace Modules\Food\Models\Panels\Actions;

use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

//-------- bases -----------

/**
 * Class RestaurantPdfAction
 * @package Modules\Food\Models\Panels\Actions
 */
class RestaurantPdfAction extends XotBasePanelAction
{
    /**
     * @var bool
     */
    public bool $onItem = true; //onlyContainer
    /**
     * @var bool
     */
    public bool $onContainer = false; //onlyContainer
    //mettere freccette su e giù
    /**
     * @var string
     */
    public string $icon = '<i class="fa fa-edit"></i>';

    /**
     * @return mixed
     */
    public function handle()
    {
        return $this->pdf(['pdforientation' => 'L','view'=>'pub_theme::restaurant.show.pdf']);
    }
}
=======
<?php

namespace Modules\Food\Models\Panels\Actions;

use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

//-------- bases -----------

/**
 * Class RestaurantPdfAction
 * @package Modules\Food\Models\Panels\Actions
 */
class RestaurantPdfAction extends XotBasePanelAction
{
    /**
     * @var bool
     */
    public bool $onItem = true; //onlyContainer
    /**
     * @var bool
     */
    public bool $onContainer = false; //onlyContainer
    //mettere freccette su e giù
    /**
     * @var string
     */
    public string $icon = '<i class="fa fa-edit"></i>';

    /**
     * @return mixed
     */
    public function handle()
    {
        return $this->pdf(['pdforientation' => 'L','view'=>'pub_theme::restaurant.show.pdf']);
    }
}
>>>>>>> a6dde0f (first)
