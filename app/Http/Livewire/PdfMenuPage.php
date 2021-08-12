<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PdfMenuPage extends Component
{
    public $Stationery;
    public $menutitle = '請選擇';
    public function render()
    {
        switch ($this->Stationery) {
            case 'Stationery-1':
                $this->menutitle = "書寫筆";
                break;
            case 'Stationery-2':
                $this->menutitle = "修正文具";
                break;
            case 'Stationery-3':
                $this->menutitle = "用印文具";
                break;
            case 'Stationery-4':
                $this->menutitle = "黏貼包裝";
                break;
            case 'Stationery-5':
                $this->menutitle = "桌上五金";
                break;
            case 'Stationery-6':
                $this->menutitle = "裝訂事務";
                break;
            case 'Stationery-7':
                $this->menutitle = "度量衡";
                break;
            case 'Stationery-8':
                $this->menutitle = "紙製品";
                break;
            case 'Stationery-9':
                $this->menutitle = "標示文具";
                break;

            case 'Stationery-10':
                $this->menutitle = "檔案夾";
                break;
            case 'Stationery-11':
                $this->menutitle = "檔案收納";
                break;
            case 'Stationery-12':
                $this->menutitle = "辦公傢俱";
                break;
            case 'Stationery-13':
                $this->menutitle = "事務機器";
                break;
            case 'Stationery-14':
                $this->menutitle = "耗材紙";
                break;
            case 'Stationery-15':
                $this->menutitle = "電腦耗材";
                break;
            case 'Stationery-16':
                $this->menutitle = "美勞益智";
                break;
            case 'Stationery-17':
                $this->menutitle = "五金百貨";
                break;
            case 'Stationery-18':
                $this->menutitle = "清潔用品";
                break;
            case 'Stationery-19':
                $this->menutitle = "茶水招待";
                break;
        }

        return view('livewire.pdf-menu-page');
    }
}
