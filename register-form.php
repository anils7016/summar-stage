<form class="justify-content-center align-items-center" id="form_submit" class="registerform" method="post" enctype="multipart/form-data">
    <div class="form-row">
        <div class="form-group col-md-12">
            <label><?=$label['lbl_first_name']?> <span>*</span></label>
            <input type="text" name="firstName" class="form-control" id="firstName" placeholder="<?=$label['lbl_first_name']?>" required="required">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-12">
            <label><?=$label['lbl_last_name']?> <span>*</span></label>
            <input type="text" name="lastName" class="form-control" id="lastName" placeholder="<?=$label['lbl_last_name']?>" required="required">
        </div>
    </div>
        
    <div class="form-row">
            <div class="form-group col-md-12">
                <label for=""><?=$label['lbl_email']?> <span>*</span></label>
                <input type="email" name="email"  class="form-control" placeholder="<?=$label['lbl_email']?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for=""><?=$label['lbl_mobile']?> <span>*</span></label>
                <input type="text" name="mobile" class="form-control" placeholder="<?=$label['lbl_mobile']?>" required="required">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for=""><?=$label['lbl_gender']?> <span>*</span></label>
                <select class="" required="required" style="color:black;">
                    <option value="0"><?=$label['lbl_select_gender']?></option>
                    <option value="Male" selected="select"><?=$label['lbl_male']?></option>
                    <option value="Female"><?=$label['lbl_female']?></option>
                    <option value="Other"><?=$label['lbl_other']?></option>
                </select>
            </div>
        </div>

        <div class="form-row">
        <div class="form-group col-md-12">
            <label for=""><?=$label['lbl_youtebe_url']?></label>
            <input type="text" name="youtube_url" class="form-control" placeholder="<?=$label['lbl_youtebe_url']?>">
            </div>
        </div>
    
    <div class="form-row">
            <div class="form-group col-md-7 attachdv">
                <label for=""><?=$label['lbl_attachment']?> <span>*</span></label>
                <input type="file" name="attachment" required="required" class="custom-file-input">
                    <p><?=$label['lbl_audio_video_accept']?></p>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for=""><?=$label['lbl_detail']?> <span>*</span></label>
                <textarea name="description" placeholder="<?=$label['lbl_detail']?>" id="" class="col-md-12" required="required"></textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <input class="btn gradient-bg formbtnleft marginCls" type="submit" value="<?=$label['lbl_register']?>" id="register" name="register">
            </div>
        </div>
</form>