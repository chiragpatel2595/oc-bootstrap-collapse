<?php namespace ChiragPatel\BootstrapCollapse\Components;

use Cms\Classes\ComponentBase;

class Collapse extends ComponentBase
{
    public $collapses;
    public $sortBy;
    public $sortType;
    public $perPage;

    public function componentDetails()
    {
        return [
            'name' => 'chiragpatel.bootstrapcollapse::lang.component.title',
            'description' => 'chiragpatel.bootstrapcollapse::lang.component.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'addBootstrap' => [
                'title' => 'chiragpatel.bootstrapcollapse::lang.properties.add_bootstrap.title',
                'description' => 'chiragpatel.bootstrapcollapse::lang.properties.add_bootstrap.note',
                'type' => 'dropdown',
                'placeholder' => 'Select Bootstrap Version',
                'default' => 'none',
                'options' => ['none' => 'Already Using', 'bootstrap3' => 'Bootstrap 3', 'bootstrap4' => 'Bootstrap 4'],
                'showExternalParam' => false,
            ],
            'sortBy' => [
                'title' => 'chiragpatel.bootstrapcollapse::lang.properties.sortBy.title',
                'description' => 'chiragpatel.bootstrapcollapse::lang.properties.sortBy.note',
                'type' => 'dropdown',
                'default' => 'title-asc',
                'showExternalParam' => false,
                'options' => [
                    'title-asc' => 'Title Ascending',
                    'title-desc' => 'Title Descending',
                    'updated_at-asc' => 'Date modified Ascending',
                    'updated_at-desc' => 'Date modified Descending',
                    'sort_order-asc' => 'Sort Order',
                ]
            ],
            'pagination' => [
                'title' => 'chiragpatel.bootstrapcollapse::lang.properties.pagination.title',
                'description' => 'chiragpatel.bootstrapcollapse::lang.properties.pagination.note',
                'type' => 'checkbox',
                'showExternalParam' => false,
            ],
            'collapsesPerPage' => [
                'title' => 'chiragpatel.bootstrapcollapse::lang.properties.collapsesPerPage.title',
                'description' => 'chiragpatel.bootstrapcollapse::lang.properties.collapsesPerPage.note',
                'type' => 'string',
                'default' => '15',
                'showExternalParam' => false,

            ]
        ];
    }

    public function init()
    {
        if ($this->property('addBootstrap') == 'bootstrap3') {
            $this->addCss('/plugins/chiragpatel/bootstrapcollapse/assets/bootstrap3/css/bootstrap.min.css', 'ChiragPatel.BootstrapCollapse');
            $this->addJs('/plugins/chiragpatel/bootstrapcollapse/assets/bootstrap3/js/bootstrap.min.js', 'ChiragPatel.BootstrapCollapse');
        };

        if ($this->property('addBootstrap') == 'bootstrap4') {
            $this->addCss('/plugins/chiragpatel/bootstrapcollapse/assets/bootstrap4/css/bootstrap.min.css', 'ChiragPatel.BootstrapCollapse');
            $this->addJs('/plugins/chiragpatel/bootstrapcollapse/assets/bootstrap4/js/bootstrap.min.js', 'ChiragPatel.BootstrapCollapse');
        }

        if (!empty($this->property('sortBy'))) {
            $sorting = explode('-', $this->property('sortBy'));
            $this->sortBy = $sorting[0];
            $this->sortType = $sorting[1];
        }

        if (!empty($this->property('collapsesPerPage'))) {
            $this->perPage = $this->property('collapsesPerPage');
        }
    }

    public function onRun()
    {
        if (!empty($this->property('pagination'))) {
            $this->page['collapses'] = $this->collapses = $this->loadCollapses($this->property('collapsesPerPage'), 1);
        } else {
            $this->page['collapses'] = $this->collapses = \ChiragPatel\BootstrapCollapse\Models\Collapse::where('is_active', true)->orderBy($this->sortBy, $this->sortType)->get();
        }
    }

    public function loadCollapses($perPage, $page)
    {
        $collapses = \ChiragPatel\BootstrapCollapse\Models\Collapse::where('is_active', true)->orderBy($this->sortBy, $this->sortType)->paginate($perPage, $page);
        return $collapses;
    }

    public function onPageChange()
    {
        $page = post('page');
        $this->page['collapses'] = $this->collapses = $this->loadCollapses($this->perPage, $page);
    }
}
