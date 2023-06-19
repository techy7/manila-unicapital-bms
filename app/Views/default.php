<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title><?php echo SITE_NAME; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
        <meta content="<?php echo SITE_AUTHOR; ?>" name="author" />
        <link href="<?php echo base_url('templates/assets/plugins/pace/pace-theme-flash.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('templates/assets/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="<?php echo base_url('templates/assets/plugins/jquery-scrollbar/jquery.scrollbar.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
        <?= $this->renderSection('page-require-header') ?>
        <link class="main-stylesheet" href="<?php echo base_url('templates/pages/css/themes/modern.css'); ?>" rel="stylesheet" type="text/css" />
        <link class="child-stylesheet" href="<?php echo base_url('templates/css/header.css'); ?>" rel="stylesheet" type="text/css" />
        <?= $this->renderSection('page-header') ?>
    </head>
</head>
<body class="fixed-header horizontal-menu horizontal-app-menu ">
    <!-- START PAGE-CONTAINER -->
    <div class="header p-r-0 bg-primary">

        <div class="header-inner header-md-height">
            <a class="btn-link toggle-sidebar d-lg-none text-white sm-p-l-0 btn-icon-link" data-toggle="horizontal-menu" href="#"><i class="pg-icon">menu</i></a>
            <div class="">
                <a href="<?php echo base_url('/'); ?>"><div class="brand inline no-border d-sm-inline-block"><img alt="logo" data-src="<?php echo base_url('templates/assets/img/logo_white.png'); ?>" data-src-retina="<?php echo base_url('templates/assets/img/logo_white_2x.png'); ?>" height="22" src="<?php echo base_url('templates/assets/img/logo_white.png'); ?>" width="78"></div></a>
            </div>
            <div class="d-flex align-items-center">
                <!-- START User Info-->
                <div class="dropdown pull-left p-r-10 fs-14 d-lg-inline-block d-none text-white">
                    <button aria-expanded="false" aria-haspopup="true" aria-label="profile dropdown" class="profile-dropdown-toggle" data-toggle="dropdown" type="button"><?php echo $session_data->name; ?></button>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
                        <a class="dropdown-item" href="<?php echo base_url('profile'); ?>"><span><?php echo lang('Default.profileDropdown.signedInAs'); ?><br><b><?php echo $session_data->name; ?></b></span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo base_url('profile'); ?>"><?php echo lang('Default.profileDropdown.yourProfile'); ?></a>
                        <a class="dropdown-item" href="<?php echo base_url('profile/activity'); ?>"><?php echo lang('Default.profileDropdown.yourActivity'); ?></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo base_url('help'); ?>"><?php echo lang('Default.profileDropdown.help'); ?></a>
                        <a class="dropdown-item" href="<?php echo base_url('logout'); ?>"><?php echo lang('Default.profileDropdown.logout'); ?></a>
                    </div>
                </div>
                <!-- END User Info-->
            </div>
        </div>
        
        <div class="bg-white">
            <div class="container">
                <div class="menu-bar header-sm-height" data-pages-init="horizontal-menu">
                    <a href="#" class="btn-link header-icon toggle-sidebar d-lg-none" data-toggle="horizontal-menu">
                        <i class="pg-icon"><?php echo lang('Default.close'); ?></i>
                    </a>
                    <ul>
                        <li>
                            <a href="javascript:;">
                                <span class="title"><?php echo lang('Default.headerMenu.cardsMasterTables'); ?></span>
                                <span class="arrow"></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="<?php echo base_url('cards_master_tables/pension_type'); ?>"><?php echo lang('Default.subMenuCardsMasterTables.pensionType'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('cards_master_tables/marketing_type'); ?>"><?php echo lang('Default.subMenuCardsMasterTables.marketingType'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('cards_master_tables/agents'); ?>"><?php echo lang('Default.subMenuCardsMasterTables.agents'); ?></a>
                                </li>
                                <li class=""> - </li>
                                <li>
                                    <a href="<?php echo base_url('cards_master_tables/banks'); ?>"><?php echo lang('Default.subMenuCardsMasterTables.banks'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('cards_master_tables/customers'); ?>"><?php echo lang('Default.subMenuCardsMasterTables.customers'); ?></a>
                                </li>
                                <li class=""> - </li>
                                <li>
                                    <a href="<?php echo base_url('cards_master_tables/transaction_types'); ?>"><?php echo lang('Default.subMenuCardsMasterTables.transactionTypes'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('cards_master_tables/disbursement_types'); ?>"><?php echo lang('Default.subMenuCardsMasterTables.disbursementTypes'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('cards_master_tables/beginning_balance_per_transaction'); ?>"><?php echo lang('Default.subMenuCardsMasterTables.beginningBalancePerTransaction'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('cards_master_tables/beginning_balance_per_change_fund'); ?>"><?php echo lang('Default.subMenuCardsMasterTables.beginningBalancePerChangeFund'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('cards_master_tables/beginning_balance_per_dcp'); ?>"><?php echo lang('Default.subMenuCardsMasterTables.beginningBalancePerDCP'); ?></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <span class="title"><?php echo lang('Default.headerMenu.transactions'); ?></span>
                                <span class="arrow"></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="<?php echo base_url('transactions/lending_transaction'); ?>"><?php echo lang('Default.subMenuTransactions.lendingTransaction'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('transactions/lending_transaction_promo'); ?>"><?php echo lang('Default.subMenuTransactions.lendingTransactionPromo'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('transactions/check_voucher'); ?>"><?php echo lang('Default.subMenuTransactions.checkVoucher'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('transactions/collection'); ?>"><?php echo lang('Default.subMenuTransactions.collection'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('transactions/change_fund'); ?>"><?php echo lang('Default.subMenuTransactions.changeFund'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('transactions/adjustment_entry'); ?>"><?php echo lang('Default.subMenuTransactions.adjustmentEntry'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('transactions/daily_cash_position_entry'); ?>"><?php echo lang('Default.subMenuTransactions.dailyCashPositionEntry'); ?></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <span class="title"><?php echo lang('Default.headerMenu.pa_da'); ?></span>
                                <span class="arrow"></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="<?php echo base_url('pa_da/problem_accounts'); ?>"><?php echo lang('Default.subMenuPA_DA.problemAccounts'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('pa_da/dead_accounts'); ?>"><?php echo lang('Default.subMenuPA_DA.deadAccounts'); ?></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <span class="title"><?php echo lang('Default.headerMenu.reportsInquiry'); ?></span>
                                <span class="arrow"></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="javascript:;">
                                        <span class="title"><?php echo lang('Default.subMenuReportsInquiry.cards'); ?></span>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                    <li>
                                        <a href="#<?php echo base_url('reports_inquiry/cards'); ?>"><?php echo lang('Default.subMenuReportsInquiry.cards'); ?></a>
                                    </li>
                                    <li>
                                        <a href="#<?php echo base_url('reports_inquiry/cards'); ?>"><?php echo lang('Default.subMenuReportsInquiry.cards'); ?></a>
                                    </li>
                                    <li>
                                        <a href="#<?php echo base_url('reports_inquiry/cards'); ?>"><?php echo lang('Default.subMenuReportsInquiry.cards'); ?></a>
                                    </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('reports_inquiry/change_fund_register'); ?>"><?php echo lang('Default.subMenuReportsInquiry.changeFundRegister'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('reports_inquiry/check_register'); ?>"><?php echo lang('Default.subMenuReportsInquiry.checkRegister'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('reports_inquiry/collection_sheet'); ?>"><?php echo lang('Default.subMenuReportsInquiry.collectionSheet'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('reports_inquiry/uncollected_accounts_report'); ?>"><?php echo lang('Default.subMenuReportsInquiry.uncollectedAccountsReport'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('reports_inquiry/daily_cash_position'); ?>"><?php echo lang('Default.subMenuReportsInquiry.dailyCashPosition'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('reports_inquiry/journal_entry'); ?>"><?php echo lang('Default.subMenuReportsInquiry.journalEntry'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('reports_inquiry/transaction_list'); ?>"><?php echo lang('Default.subMenuReportsInquiry.transactionList'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('reports_inquiry/agent_commission'); ?>"><?php echo lang('Default.subMenuReportsInquiry.agentCommission'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('reports_inquiry/atm_pb_inventory'); ?>"><?php echo lang('Default.subMenuReportsInquiry.ATMPBInventory'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('reports_inquiry/itb_report'); ?>"><?php echo lang('Default.subMenuReportsInquiry.ITBReport'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('reports_inquiry/master_list'); ?>"><?php echo lang('Default.subMenuReportsInquiry.masterList'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('reports_inquiry/udi'); ?>"><?php echo lang('Default.subMenuReportsInquiry.udi'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('reports_inquiry/adjustment_entry_report'); ?>"><?php echo lang('Default.subMenuReportsInquiry.adjustmentEntryReport'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('reports_inquiry/lr_deduction_report'); ?>"><?php echo lang('Default.subMenuReportsInquiry.LRDeductionReport'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('reports_inquiry/pin_list'); ?>"><?php echo lang('Default.subMenuReportsInquiry.PINList'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('reports_inquiry/summary_transactions'); ?>"><?php echo lang('Default.subMenuReportsInquiry.summaryOfTransactions'); ?></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <span class="title"><?php echo lang('Default.headerMenu.systemAdmin'); ?></span>
                                <span class="arrow"></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="<?php echo base_url('system_admin/auto_numbering'); ?>"><?php echo lang('Default.subMenuSystemAdmin.autoNumbering'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('system_admin/transaction_type'); ?>"><?php echo lang('Default.subMenuSystemAdmin.transactionType'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('system_admin/transaction_type_promo'); ?>"><?php echo lang('Default.subMenuSystemAdmin.transactionTypePromo'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('system_admin/company_setup'); ?>"><?php echo lang('Default.subMenuSystemAdmin.companySetup'); ?></a>
                                </li>
                                <li class=""> - </li>
                                <li>
                                    <a href="<?php echo base_url('system_admin/user_accounts'); ?>"><?php echo lang('Default.subMenuSystemAdmin.userAccounts'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('system_admin/transaction_logs'); ?>"><?php echo lang('Default.subMenuSystemAdmin.transactionLog'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('system_admin/setup_database_location'); ?>"><?php echo lang('Default.subMenuSystemAdmin.setupDatabaseLocation'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('system_admin/compact_database'); ?>"><?php echo lang('Default.subMenuSystemAdmin.compactDatabase'); ?></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="page-container ">
        <!-- START PAGE CONTENT WRAPPER -->
        <div class="page-content-wrapper ">
            <!-- START PAGE CONTENT -->
            <div class="content ">
                <div class="bg-white">
                    <div class="container">
                        <?php echo $breadcrumbs; ?>
                    </div>
                </div>
                <?= $this->renderSection('content') ?>
            </div>
            <!-- END PAGE CONTENT -->

            <!-- START COPYRIGHT -->
            <div class=" container   container-fixed-lg footer">
                <div class="copyright sm-text-center">
                    <p class="small-text no-margin pull-left sm-pull-reset">
                        <span class="hint-text m-l-15"><?= SITE_VERSION ?></span>
                    </p>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- END COPYRIGHT -->
        </div>
        <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTAINER -->

    <!-- BEGIN VENDOR JS -->
    <script src="<?php echo base_url('templates/assets/plugins/pace/pace.min.js'); ?>" type="text/javascript"></script>
    <!--  A polyfill for browsers that don't support ligatures: remove liga.js if not needed-->
    <script src="<?php echo base_url('templates/assets/plugins/liga.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('templates/assets/plugins/jquery/jquery-3.2.1.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('templates/assets/plugins/modernizr.custom.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('templates/assets/plugins/jquery-ui/jquery-ui.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('templates/assets/plugins/popper/umd/popper.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('templates/assets/plugins/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('templates/assets/plugins/jquery/jquery-easy.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('templates/assets/plugins/jquery-unveil/jquery.unveil.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('templates/assets/plugins/jquery-ios-list/jquery.ioslist.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('templates/assets/plugins/jquery-actual/jquery.actual.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('templates/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('templates/assets/plugins/classie/classie.js'); ?>" type="text/javascript"></script>
    <?= $this->renderSection('page-require-scripts') ?>
    <!-- END VENDOR JS -->

    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="<?php echo base_url('templates/pages/js/pages.min.js'); ?>" type="text/javascript"></script>
    <!-- END CORE TEMPLATE JS -->

    <!-- BEGIN PAGE LEVEL JS -->
    <?= $this->renderSection('page-scripts') ?>
    <!-- END PAGE LEVEL JS -->
</body>
</html>