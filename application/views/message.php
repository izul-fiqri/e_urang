<?php if ($this->session->has_userdata('success')) { ?>
  <div class="alert alert-success alert-dismissible">
    <i class="bi bi-check-circle me-1"></i>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" aria-hidden="true"></button>
    <!-- <span aria-hidden="true">&times;</span> -->
    <?= $this->session->flashdata('success'); ?>

    <!-- A simple success alert with icon—check it out! -->
  </div>
<?php } ?>