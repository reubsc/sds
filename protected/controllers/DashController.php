<?php

/**
 * @author Serg.Kosiy <serg.kosiy@gmail.com>
 */
class DashController extends UIDashboardController
{
    // uncomment the following to apply new layout for the controller view.
    //public $layout = '//layouts/column2';

    public function init()
    {
        parent::init();

        // Create new field in your users table for store dashboard preference
        // Set table name, user ID field name, user preference field name
        $this->setTableParams('dashboard_page', 'user_id', 'title');

        // set array of portlets
        $this->setPortlets(
                array(
                    array('id' => 1, 'title' => 'Members', 'content' => 'content goes here...'),
                    array('id' => 2, 'title' => 'Partners', 'content' => 'content here...'),
                    array('id' => 3, 'title' => 'Orgnaizations', 'content' => 'Notes list'),
                    array('id' => 4, 'title' => 'Personnel', 'content' => 'content here...'),
                    array('id' => 5, 'title' => 'Reports', 'content' => '*************'),
                   // array('id' => 6, 'title' => 'Reference', 'content' => $this->renderPartial("/members/_form", null, true)),
                )
        );

        //set content BEFORE dashboard
        $this->setContentBefore(
                //Pay attension: ExtController looking view in current dir!!!
                //$this->renderPartial('/../views/dash/before', null, true)
                );

        //set content AFTER dashboard
        $this->setContentAfter('<br><div align="center"><a href="http://kosiy.blogspot.com/p/donate.html">Donate next release</a></div>');

        // uncomment the following to apply jQuery UI theme
        // from protected/components/assets/themes folder
        $this->applyTheme('ui-darkness');

        // uncomment the following to change columns count
        //$this->setColumns(4);

        // uncomment the following to enable autosave
        $this->setAutosave(true);

        // uncomment the following to disable dashboard header
        //$this->setShowHeaders(false);

        // uncomment the following to enable context menu and add needed items
        /*
        $this->menu = array(
            array('label' => 'Index', 'url' => array('index')),
        );
        */
    }

}
