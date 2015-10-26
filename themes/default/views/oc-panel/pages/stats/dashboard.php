<div class="page-header">
    <h1><?=__('Site Usage Statistics')?></h1>   
</div>

<div class="row">
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-bordered table-condensed">
                    <thead>
                        <tr>
                            <th></th>
                            <th><?=__('Today')?></th>
                            <th><?=__('Yesterday')?></th>
                            <th><?=__('Last 30 days')?></th>
                            <th><?=__('Total')?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><b><?=__('Ads')?></b></td>
                            <td><?=$ads_today?></td>
                            <td><?=$ads_yesterday?></td>
                            <td><?=$ads_month?></td>
                            <td><?=$ads_total?></td>
                        </tr>
                        <tr>
                            <td><b><?=__('Visits')?></b></td>
                            <td><?=$visits_today?></td>
                            <td><?=$visits_yesterday?></td>
                            <td><?=$visits_month?></td>
                            <td><?=$visits_total?></td>
                        </tr>
                        <tr>
                            <td><b><?=__('Sales')?></b></td>
                            <td><?=$orders_today?></td>
                            <td><?=$orders_yesterday?></td>
                            <td><?=$orders_month?></td>
                            <td><?=$orders_total?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?=__('Charts')?></h3>
            </div>
            <div class="panel-body">
                <form id="edit-profile" class="form-inline" method="post" action="">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><?=__('From')?></div>
                            <input type="text" class="form-control" id="from_date" name="from_date" value="<?=$from_date?>" data-date="<?=$from_date?>" data-date-format="yyyy-mm-dd">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                    <span>-</span>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><?=__('To')?></div>
                            <input type="text" class="form-control" id="to_date" name="to_date" value="<?=$to_date?>" data-date="<?=$to_date?>" data-date-format="yyyy-mm-dd">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary"><?=__('Filter')?></button>
                </form>

                <br>

                <div>
                    <h6 class="text-center"><?=__('Views and Ads statistics')?></h6>
                    <?=Chart::line($stats_daily, array('height'  => 400,
                                                       'width'   => 400,
                                                       'options' => array('responsive' => true, 'maintainAspectRatio' => false, 'scaleShowVerticalLines' => false, 'multiTooltipTemplate' => '<%= datasetLabel %> - <%= value %>')))?>
                </div>     
                
                <div>
                    <h6 class="text-center"><?=__('Sales statistics')?></h6>
                    <?=Chart::line($stats_orders, array('height'  => 400,
                                                        'width'   => 400,
                                                        'options' => array('responsive' => true, 'maintainAspectRatio' => false, 'scaleShowVerticalLines' => false, 'multiTooltipTemplate' => '<%= datasetLabel %> - <%= value %>')))?>
                </div>     
            </div>
        </div>
    </div> <!-- /.col-md-9 -->
</div> <!-- /.row -->