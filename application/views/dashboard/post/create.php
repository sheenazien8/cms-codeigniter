<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/sidebar'); ?>
<div class="main-content-container container-fluid px-4">
	<div class="page-header row no-gutters py-4">
        <div class="col-12 text-center text-sm-left mb-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="">Blog Post</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Post</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Input & Button Groups -->
    <div class="row">
        <div class="col-lg-9 col-md-12">
        <!-- Add New Post Form -->
            <div class="card card-small mb-3">
                <div class="card-body">
                    <form class="add-new-post">
                        <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Post Title">
                        <div id="editor-container" class="add-new-post__editor mb-1">
                           asdsa 
                        </div>
                    </form>
                </div>
            </div>
        <!-- / Add New Post Form -->
        </div>
        <div class="col-lg-3 col-md-12">
            <!-- Post Overview -->
            <div class='card card-small mb-3'>
                <div class="card-header border-bottom">
                    <h6 class="m-0">Categories</h6>
                </div>
                <div class='card-body p-0'>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item px-3 pb-2">
                        <?php foreach ($content as $value): ?>
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" id="category<?= $value->id_k ?>" value="<?= $value->id_k ?>">
                            <label class="custom-control-label" for="category<?= $value->id_k ?>"><?= $value->nama_kategori ?></label>
                        </div>
                        <?php endforeach ?>
                        </li>
                      <li class="list-group-item d-flex px-3">
                        <div class="input-group">
                            <form method="post" action="<?= base_url('kategori/store') ?>" >
                                <div class="input-group-append">
                                <input type="text" class="form-control" name="nama_kategori" placeholder="Kategori Baru">
                                    <input type="submit" class="btn btn-white px-2">
                                </div>
                            </form>
                        </div>
                      </li>
                    </ul>
                </div>
            </div>
            <!-- / Post Overview -->
        </div>
    </div>
    <!-- / Input & Button Groups -->
</div>
<script src="<?= base_url() ?>assets/ckeditor/ckeditor.js"></script>
<?php $this->load->view('template/footer'); ?>