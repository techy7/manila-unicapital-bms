<?= $this->extend('default') ?>

<?= $this->section('content') ?>
<!-- START CONTAINER FLUID -->
<div class=" container p-t-30 container-fixed-lg">
    <h3><?php echo lang('Dashboard.hi'); ?>, <?php echo $session_data->name; ?>!</h3>
    <!-- START MAIN ROW -->
    <div class="row">
        <div class="col-sm-3 m-b-10">
            <div class="ar-1-1">
                <!-- START WIDGET -->
                <div class="card bg-primary widget widget-loader-circle-lg no-margin">
                    <div class="card-header">
                        <div class="card-title"><?php echo lang('Dashboard.boxWidgets.customers'); ?></div>
                    </div>
                    <div class="card-body">
                        <a href="<?php echo base_url('customers'); ?>"><img class="img-90" src="<?php echo base_url('templates/images/customers.png'); ?>">
                        <div class="pull-bottom bottom-left bottom-right padding-25">
                            <h3 class="text-white"><?php echo lang('Dashboard.boxWidgets.customers'); ?></h3>
                        </div></a>
                    </div>
                </div><!-- END WIDGET -->
            </div>
        </div>

        <div class="col-sm-3 m-b-10">
            <div class="ar-1-1">
                <!-- START WIDGET -->
                <div class="card bg-primary widget widget-loader-circle-lg no-margin">
                    <div class="card-header">
                        <div class="card-title"><?php echo lang('Dashboard.boxWidgets.transactions'); ?></div>
                    </div>
                    <div class="card-body">
                        <a href="<?php echo base_url('transactions'); ?>"><img class="img-90" src="<?php echo base_url('templates/images/transactions.png'); ?>">
                        <div class="pull-bottom bottom-left bottom-right padding-25">
                            <h3 class="text-white"><?php echo lang('Dashboard.boxWidgets.transactions'); ?></h3>
                        </div></a>
                    </div>
                </div><!-- END WIDGET -->
            </div>
        </div>

        <div class="col-sm-3 m-b-10">
            <div class="ar-1-1">
                <!-- START WIDGET -->
                <div class="card bg-primary widget widget-loader-circle-lg no-margin">
                    <div class="card-header">
                        <div class="card-title"><?php echo lang('Dashboard.boxWidgets.checkVouchers'); ?></div>
                    </div>
                    <div class="card-body">
                        <a href="<?php echo base_url('check_vouchers'); ?>"><img class="img-90" src="<?php echo base_url('templates/images/check-vouchers.png'); ?>">
                        <div class="pull-bottom bottom-left bottom-right padding-25">
                            <h3 class="text-white"><?php echo lang('Dashboard.boxWidgets.checkVouchers'); ?></h3>
                        </div></a>
                    </div>
                </div><!-- END WIDGET -->
            </div>
        </div>

        <div class="col-sm-3 m-b-10">
            <div class="ar-1-1">
                <!-- START WIDGET -->
                <div class="card bg-primary widget widget-loader-circle-lg no-margin">
                    <div class="card-header">
                        <div class="card-title"><?php echo lang('Dashboard.boxWidgets.changeFunds'); ?></div>
                    </div>
                    <div class="card-body">
                        <a href="<?php echo base_url('change_funds'); ?>"><img class="img-90" src="<?php echo base_url('templates/images/change-funds.png'); ?>">
                        <div class="pull-bottom bottom-left bottom-right padding-25">
                            <h3 class="text-white"><?php echo lang('Dashboard.boxWidgets.changeFunds'); ?></h3>
                        </div></a>
                    </div>
                </div><!-- END WIDGET -->
            </div>
        </div>
    </div>
    <!-- END MAIN ROW -->

    <!-- START MAIN ROW -->
    <div class="row m-t-20">
        <div class="col-sm-3 m-b-10">
            <div class="ar-1-1">
                <!-- START WIDGET -->
                <div class="card bg-primary widget widget-loader-circle-lg no-margin">
                    <div class="card-header">
                        <div class="card-title"><?php echo lang('Dashboard.boxWidgets.collectionEntries'); ?></div>
                    </div>
                    <div class="card-body">
                        <a href="<?php echo base_url('collection_entries'); ?>"><img class="img-90" src="<?php echo base_url('templates/images/collection-entries.png'); ?>">
                        <div class="pull-bottom bottom-left bottom-right padding-25">
                            <h3 class="text-white"><?php echo lang('Dashboard.boxWidgets.collectionEntries'); ?></h3>
                        </div></a>
                    </div>
                </div><!-- END WIDGET -->
            </div>
        </div>

        <div class="col-sm-3 m-b-10">
            <div class="ar-1-1">
                <!-- START WIDGET -->
                <div class="card bg-primary widget widget-loader-circle-lg no-margin">
                    <div class="card-header">
                        <div class="card-title"><?php echo lang('Dashboard.boxWidgets.scheduleLoans'); ?></div>
                    </div>
                    <div class="card-body">
                        <a href="<?php echo base_url('schedule_loans'); ?>"><img class="img-90" src="<?php echo base_url('templates/images/schedule-loans.png'); ?>">
                        <div class="pull-bottom bottom-left bottom-right padding-25">
                            <h3 class="text-white"><?php echo lang('Dashboard.boxWidgets.scheduleLoans'); ?></h3>
                        </div></a>
                    </div>
                </div><!-- END WIDGET -->
            </div>
        </div>

        <div class="col-sm-3 m-b-10">
            <div class="ar-1-1">
                <!-- START WIDGET -->
                <div class="card bg-primary widget widget-loader-circle-lg no-margin">
                    <div class="card-header">
                        <div class="card-title"><?php echo lang('Dashboard.boxWidgets.transactionPromo'); ?></div>
                    </div>
                    <div class="card-body">
                        <a href="<?php echo base_url('transaction_promo'); ?>"><img class="img-90" src="<?php echo base_url('templates/images/transaction-promo.png'); ?>">
                        <div class="pull-bottom bottom-left bottom-right padding-25">
                            <h3 class="text-white"><?php echo lang('Dashboard.boxWidgets.transactionPromo'); ?></h3>
                        </div></a>
                    </div>
                </div><!-- END WIDGET -->
            </div>
        </div>
    </div>
    <!-- END MAIN ROW -->

    <!-- START MAIN ROW -->
    <div class="row m-t-20 m-b-20">
        <div class="col-sm-4">
            <div class="card no-border widget-loader-bar m-b-10">
                <div class="container-xs-height full-height">
                    <div class="row-xs-height">
                        <div class="col-xs-height col-top">
                            <div class="card-header top-left top-right">
                                <div class="card-title">
                                    <span class="font-montserrat fs-11 all-caps">New Accounts for the Day <i class="fa fa-chevron-right"></i></span>
                                </div>
                                <div class="card-controls">
                                    <ul>
                                        <li>
                                            <a class="portlet-refresh text-black" data-toggle="refresh" href="#"><i class="portlet-icon portlet-icon-refresh"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-xs-height">
                        <div class="col-xs-height col-top">
                            <div class="p-l-20 p-t-50 p-b-40 p-r-20">
                                <h3 class="no-margin p-b-5">24</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card no-border widget-loader-bar m-b-10">
                <div class="container-xs-height full-height">
                    <div class="row-xs-height">
                        <div class="col-xs-height col-top">
                            <div class="card-header top-left top-right">
                                <div class="card-title">
                                    <span class="font-montserrat fs-11 all-caps">New Accounts for the Day <i class="fa fa-chevron-right"></i></span>
                                </div>
                                <div class="card-controls">
                                    <ul>
                                        <li>
                                            <a class="portlet-refresh text-black" data-toggle="refresh" href="#"><i class="portlet-icon portlet-icon-refresh"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-xs-height">
                        <div class="col-xs-height col-top">
                            <div class="p-l-20 p-t-50 p-b-40 p-r-20">
                                <h3 class="no-margin p-b-5">24</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card no-border widget-loader-bar m-b-10">
                <div class="container-xs-height full-height">
                    <div class="row-xs-height">
                        <div class="col-xs-height col-top">
                            <div class="card-header top-left top-right">
                                <div class="card-title">
                                    <span class="font-montserrat fs-11 all-caps">New Accounts for the Day <i class="fa fa-chevron-right"></i></span>
                                </div>
                                <div class="card-controls">
                                    <ul>
                                        <li>
                                            <a class="portlet-refresh text-black" data-toggle="refresh" href="#"><i class="portlet-icon portlet-icon-refresh"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-xs-height">
                        <div class="col-xs-height col-top">
                            <div class="p-l-20 p-t-50 p-b-40 p-r-20">
                                <h3 class="no-margin p-b-5">24</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN ROW -->
</div>
<!-- END CONTAINER FLUID -->
<?= $this->endSection() ?>

<?= $this->section('page-require-scripts') ?>
<script src="<?php echo base_url('templates/assets/plugins/jquery-validation/js/jquery.validate.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('templates/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js'); ?>" type="text/javascript"></script>
<?= $this->endSection() ?>

<?= $this->section('page-scripts') ?>
<script src="<?php echo base_url('templates/assets/js/scripts.js'); ?>" type="text/javascript"></script>
<?= $this->endSection() ?>