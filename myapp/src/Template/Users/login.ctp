<?= $this->Flash->render()?>
<div class="sign-in-page">
    <div class="row">
        <!-- Sign-in -->
        <div class="col-md-6 col-sm-6 sign-in">
            <h4 class="">Log In</h4>
            <?= $this->Form->create()?>
            <div class="form-group">
                <label class="info-title" for="exampleInputEmail1">Username or Email <span>*</span></label>
                <input type="text" class="form-control unicase-form-control text-input" name="username" id="username" required="" placeholder="Enter user Name Or Email">
            </div>
            <div class="form-group">
                <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
                <input type="password" class="form-control unicase-form-control text-input" id="password" required="" name="password" placeholder="Enter Password" >
            </div>
            <?= $this->Form->button(__('Login'));?>
            <?= $this->Form->end()?>
        </div>
        <!-- Sign-in -->
    </div><!-- /.row -->
</div><!-- /.sigin-in-->

