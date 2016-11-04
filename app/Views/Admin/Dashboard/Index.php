<section class="content-header">
    <h1><?= __d('system', 'Dashboard'); ?></h1>
    <ol class="breadcrumb">
        <li><a href='<?= site_url('admin/dashboard'); ?>'><i class="fa fa-dashboard"></i> <?= __d('system', 'Dashboard'); ?></a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

<?= Session::getMessages(); ?>

<div class="box box-default">
    <div class="box-header with-border">
        <div class="box-tools">
        </div>
    </div>
    <br>
    <br>

    <div class="box-body no-padding">
        
        <?php if($user->id != 5){?>
        <div class="col-md-6">
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="inputFinancialYear" class="col-sm-4 control-label" style="text-align: right;">Account:</label>
                <div class="col-sm-8">
                    <select name="role" id="role" class="form-control select2">
                        <option >-- Select -- </option>
                        <option value="1">1 - Cochin</option>
                        <option value="2">2 - Ernakulam </option>
                        <option value="3">3 - Irinjalakuda</option>
                        <option value="4">4 - Kotta</option>
                    </select>
                </div>
            </div>
        </div>
        <br>
        <br>
        <?php }?>

        <?php if($user->id == 1){?>
        <div class="col-md-6">
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="inputFinancialYear" class="col-sm-4 control-label" style="text-align: right;">Department:</label>
                <div class="col-sm-8">
                    <select name="role" id="role" class="form-control select2">
                        <option > -- Select -- </option>
                        <option value="1">1 - Transport </option>
                        <option value="2">2 - Panjayath </option>
                        <option value="3">3 - Vigilance </option>
                    </select>
                </div>
            </div>
        </div>
        <br>
        <br>
        <?php }?>

        <?php if($user->id == 5){?>
        <div class="col-md-6">
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="inputFinancialYear" class="col-sm-4 control-label" style="text-align: right;">Family Member:</label>
                <div class="col-sm-8">
                    <select name="role" id="role" class="form-control select2">
                        <option > -- Select -- </option>
                        <option value="1">1 - XXX </option>
                        <option value="2">2 - YYY </option>
                        <option value="3">3 - ZZZ </option>
                    </select>
                </div>
            </div>
        </div>
        <br>
        <br>
        <?php }?>

        <?php if($user->id != 5){?>
        <div class="col-md-6">
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="inputFinancialYear" class="col-sm-4 control-label" style="text-align: right;">Type:</label>
                <div class="col-sm-8">
                     <select name="role" id="role" class="form-control select2">
                        <option> -- Select -- </option>
                        <option value="1">1 - Transport 1</option>
                        <option value="2">2 - Transport 2</option>
                        <option value="3">3 - Transport 3</option>
                    </select>
                </div>
            </div>
        </div>
        <br>
        <br>
        <?php }?>

        <table id='left' class='table table-striped table-hover responsive'>
            <thead>
                <tr class="bg-navy disabled">
                    <th style='text-align: center; vertical-align: middle;'><?= __d('users', 'Application Number'); ?></th>
                    <th style='text-align: center; vertical-align: middle;'><?= __d('users', 'Application Type'); ?></th>
                    <th style='text-align: center; vertical-align: middle;'><?= __d('users', 'Name'); ?></th>
                    <th style='text-align: center; vertical-align: middle;'><?= __d('users', 'Created At'); ?></th>
                    <th style='text-align: center; vertical-align: middle;'><?= __d('users', 'Status'); ?></th>
                    <th style='text-align: center; vertical-align: middle;'><?= __d('users', 'Action'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($forms as $form) {
                    switch ($form->status) {
                        case '1':
                            $status = 'Draft';
                            break;

                        case '2':
                            $status = 'Queue';
                            break;

                        case '3':
                            $status = 'Process';
                            break;
                        case '4':
                            $status = 'Complete';
                            break;

                        default:
                            $status = 'Draft';
                            break;
                    }?>
                <tr>
                    <td style='text-align: center; vertical-align: middle;' ><?php echo $form->id;?></td>
                    <td style='text-align: center; vertical-align: middle;' ><?php echo $form->type;?></td>
                    <td style='text-align: center; vertical-align: middle;' ><?php echo $form->id;?></td>
                    <td style='text-align: center; vertical-align: middle;' ><?php echo date("d-m-Y", strtotime($form->created));?></td>
                    <td style='text-align: center; vertical-align: middle;' ><?php echo $status;?></td>
                    <td style='text-align: right; vertical-align: middle;' >
                        <div class='btn-group' role='group' aria-label='...'>
                            <a class='btn btn-sm btn-warning' href='#' title='". __d('users', 'Show the Details') ."' role='button'><i class='fa fa-search'></i></a>
                            <a class='btn btn-sm btn-success' href='#' title='" .__d('users', 'Edit this User') ."' role='button'><i class='fa fa-pencil'></i></a>
                            <a class='btn btn-sm btn-danger' href='#' data-toggle='modal' data-target='#confirm_" .$user->id ."' title='" .__d('users', 'Delete this User') ."' role='button'><i class='fa fa-remove'></i></a>
                        </div>
                    </td>
                </tr>
                <?php }?>
            </tbody>

        </table>
    </div>
</div>

</section>
