<script src="<?= base_url('assets/vendor'); ?>/js/plugins/jquery/jquery-3.4.1.js"></script>
<script src="<?= base_url('assets/vendor'); ?>/js/plugins/summernote/summernote-bs4.js"></script>
<script>
    $(document).ready(function() {
        $('#summenote').summernote({
            height: "300px",
            callbacks: {
                onImageUpload: function(image) {
                    uploadImage(image[0]);
                },
                onMediaDelete: function(target) {

                }
            }
        })
    })
</script>
<div class="col-md">
    <!-- Validation Wizard Material -->
    <div class="js-wizard-validation-material block">
        <!-- Step Tabs -->
        <ul class="nav nav-tabs nav-tabs-alt nav-fill" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="#wizard-validation-material-step1" data-toggle="tab">1. Personal</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#wizard-validation-material-step2" data-toggle="tab">2. Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#wizard-validation-material-step3" data-toggle="tab">3. Extra</a>
            </li>
        </ul>
        <!-- END Step Tabs -->

        <!-- Form -->
        <form class="js-wizard-validation-material-form" action="be_forms_wizard.html" method="post">
            <!-- Steps Content -->
            <div class="block-content block-content-full tab-content" style="min-height: 267px;">
                <!-- Step 1 -->
                <div class="tab-pane active" id="wizard-validation-material-step1" role="tabpanel">
                    <div class="form-group">
                        <div class="form-material floating">
                            <input class="form-control" type="text" id="wizard-validation-material-firstname" name="wizard-validation-material-firstname" required>
                            <label for="wizard-validation-material-firstname">First Name</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-material floating">
                            <input class="form-control" type="text" id="wizard-validation-material-lastname" name="wizard-validation-material-lastname" required>
                            <label for="wizard-validation-material-lastname">Last Name</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-material floating">
                            <input class="form-control" type="email" id="wizard-validation-material-email" name="wizard-validation-material-email" required>
                            <label for="wizard-validation-material-email">Email</label>
                        </div>
                    </div>
                </div>
                <!-- END Step 1 -->

                <!-- Step 2 -->
                <div class="tab-pane" id="wizard-validation-material-step2" role="tabpanel">
                    <div class="form-group">

                    </div>
                </div>
                <!-- END Step 2 -->

                <!-- Step 3 -->
                <div class="tab-pane" id="wizard-validation-material-step3" role="tabpanel">
                    <div class="form-group">
                        <div class="form-material floating">
                            <input class="form-control" type="text" id="wizard-validation-material-location" name="wizard-validation-material-location">
                            <label for="wizard-validation-material-location">Location</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-material floating">
                            <select class="form-control" id="wizard-validation-material-skills" name="wizard-validation-material-skills" size="1">
                                <option></option><!-- Empty value for demostrating material select box -->
                                <option value="1">Photoshop</option>
                                <option value="2">HTML</option>
                                <option value="3">CSS</option>
                                <option value="4">JavaScript</option>
                            </select>
                            <label for="wizard-validation-material-skills">Skills</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="css-control css-control-primary css-switch" for="wizard-validation-material-terms">
                            <input type="checkbox" class="css-control-input" id="wizard-validation-material-terms" name="wizard-validation-material-terms">
                            <span class="css-control-indicator"></span> Agree with the terms
                        </label>
                    </div>
                </div>
                <!-- END Step 3 -->
            </div>
            <!-- END Steps Content -->

            <!-- Steps Navigation -->
            <div class="block-content block-content-sm block-content-full bg-body-light">
                <div class="row">
                    <div class="col-6">
                        <button type="button" class="btn btn-alt-secondary" data-wizard="prev">
                            <i class="fa fa-angle-left mr-5"></i> Previous
                        </button>
                    </div>
                    <div class="col-6 text-right">
                        <button type="button" class="btn btn-alt-secondary" data-wizard="next">
                            Next <i class="fa fa-angle-right ml-5"></i>
                        </button>
                        <button type="submit" class="btn btn-alt-primary d-none" data-wizard="finish">
                            <i class="fa fa-check mr-5"></i> Submit
                        </button>
                    </div>
                </div>
            </div>
            <!-- END Steps Navigation -->
        </form>
        <!-- END Form -->
    </div>