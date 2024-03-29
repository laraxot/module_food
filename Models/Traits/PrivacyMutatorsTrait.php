<?php

declare(strict_types=1);

// //////////////////////////////////////////////
//
//	QUESTO E' IL GENERICO, per food va usato quello dentro XRA\Food\Models\Traits;
//
// ///////////////////////////////////////////////

namespace Modules\Food\Models\Traits;

// //use Laravel\Scout\Searchable;

// ----- models------
use Modules\Food\Models\ProfilePrivacyChrono;
use Modules\Install\Helpers\DatabaseManager;

// ------ traits ---

trait PrivacyMutatorsTrait {
    public function privacy() {
        try {
            return $this->hasMany(ProfilePrivacyChrono::class, 'user_id', 'user_id');
        } catch (\Exception $ex) {
            $this->forceMigrations();
        }
    }

    /**
     * FUNZIONE TEMPORANEA DA RIMUOVERE.
     */
    private function forceMigrations() {
        $databaseManager = new DatabaseManager();
        $response = $databaseManager->migrateAndSeed();
        exit('DB AGGIORNATO! RIPETERE OPERAZIONE');
    }

    public function user() {
        return $this->hasOne(User::class, 'user_id', 'user_id');
    }

    public function getConsCheckboxXRow($k) {
        try {
            $txt = trans('food::privacy.cons_checkbox_'.$k);
            $row = ProfilePrivacyChrono::where('checkbox_position', '=', $k)
                ->where('user_id', $this->user_id)
                ->where('checkbox_label', $txt)
                ->latest()
                ->first();

            return $row;
        } catch (\Exception $ex) {
            $this->forceMigrations();
        }
    }

    public function getConsCheckboxX($k) {
        $row = $this->getConsCheckboxXRow($k);

        if (null == $row) {
            return null;
        }
        $ris = $row->flag_value;

        return $ris;
    }

    public function getConsCheckboxXTxt($k) {
        $row = $this->getConsCheckboxXRow($k);

        if (null == $row) {
            return null;
        }
        $ris = $row->checkbox_label;

        return $ris;
    }

    public function setConsCheckboxX($k, $v) {
        try {
            $txt = \Request::input('linked.cons_checkbox_'.$k.'_txt');
            $data = [
                'user_id' => $this->user_id,
                'checkbox_position' => $k,
                'checkbox_value' => $v,
                'checkbox_label' => $txt,
            ];

            $row = ProfilePrivacyChrono::create($data);
        } catch (\Exception $ex) {
            $this->forceMigrations();
        }
    }

    public function setConsCheckboxXTxt($k, $v) {
    }

    public function getConsCheckboxDescrX($k) {
        return $this->desc[$k];
    }

    public function getConsCheckbox0Attribute($value) {
        return $this->getConsCheckboxX(0);
    }

    public function getConsCheckbox1Attribute($value) {
        return $this->getConsCheckboxX(1);
    }

    public function getConsCheckbox2Attribute($value) {
        return $this->getConsCheckboxX(2);
    }

    public function getConsCheckbox3Attribute($value) {
        return $this->getConsCheckboxX(3);
    }

    public function getConsCheckbox0TxtAttribute($value) {
        return $this->getConsCheckboxXTxt(0);
    }

    public function getConsCheckbox1TxtAttribute($value) {
        return $this->getConsCheckboxXTxt(1);
    }

    public function getConsCheckbox2TxtAttribute($value) {
        return $this->getConsCheckboxXTxt(2);
    }

    public function getConsCheckbox3TxtAttribute($value) {
        return $this->getConsCheckboxXTxt(3);
    }

    public function setConsCheckbox0Attribute($value) {
        $this->setConsCheckboxX(0, $value);
    }

    public function setConsCheckbox1Attribute($value) {
        $this->setConsCheckboxX(1, $value);
    }

    public function setConsCheckbox2Attribute($value) {
        $this->setConsCheckboxX(2, $value);
    }

    public function setConsCheckbox3Attribute($value) {
        $this->setConsCheckboxX(3, $value);
    }

    public function setConsCheckbox0TxtAttribute($value) {
        $this->setConsCheckboxXTxt(0, $value);
    }

    public function setConsCheckbox1TxtAttribute($value) {
        $this->setConsCheckboxXTxt(1, $value);
    }

    public function setConsCheckbox2TxtAttribute($value) {
        $this->setConsCheckboxXTxt(2, $value);
    }

    public function setConsCheckbox3TxtAttribute($value) {
        $this->setConsCheckboxXTxt(3, $value);
    }
}
