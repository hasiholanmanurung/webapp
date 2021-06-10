<div class="h2 d-flex justify-content-between">
        <?php echo $title; ?>
        <small><?=$datetime; ?></small>
    </div>
    <hr>
    
    <?=form_open('userroles/create');?>
    <fieldset>
        <div class="form-group">
            <label for="txtUser" class="form-label mt-4">Nama</label>
            <select name="userId" id="txtUser" class="form-control">
                <?php foreach($users as $user) : ?>
                <option value="<?=$user->id?>"><?=$user->name?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <label for="txtUserRole" class="form-label mt-4">User Role</label>
            <select name="userRole" id="txtUserRole" class="form-control">
                <?php foreach($roles as $role) : ?>
                <option value="<?=$role->id?>"><?=strtoupper($role->role)?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <label for="txtUserStatus" class="form-label mt-4">Status</label>
            <select name="aktif" id="txtUserStatus" class="form-control">
                <option value="0">Tidak Aktif</option>
                <option value="1">Aktif</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary my-3">Submit</button>
        <button type="button" onclick="history.back(-1)" class="btn btn-secondary">Batal </button>
        <!-- <a href="<//?=site_url('/pelanggan')?>" class="btn btn-danger">Batal</a> -->
    </fieldset>
    <?=form_close();?>