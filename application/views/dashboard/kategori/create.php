<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/sidebar'); ?>
<div class="main-content-container container-fluid px-4">
	<div class="page-header row no-gutters py-4">
		<div class="col-12 col-sm-4 text-center text-sm-left mb-0">
			<nav aria-label="breadcrumb">
			  	<ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
			    	<li class="breadcrumb-item"><a href="<?= base_url('dashboard/kategori') ?>">Kategori</a></li>
			    	<li class="breadcrumb-item active" aria-current="page">Tambah Kategori</li>
			  	</ol>
			</nav>
		</div>
    </div>
	<!-- Input & Button Groups -->
    <div class="card card-small mb-4">
      <div class="card-header border-bottom">
        <h6 class="m-0">Kategori</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item px-3">
          <form action="<?= base_url('kategori/store') ?>" method="POST">
            <!-- Seamless Input Groups -->
            <strong class="text-muted d-block mb-2">Nama Kategori</strong>
            <div class="input-group mb-3">
              <div class="input-group input-group-seamless">
                <span class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">dashboard</i>
                  </span>
                </span>
                <input type="text" name="nama_kategori" class="form-control" placeholder="Masukan Nama Kategori" value=""> </div>
            </div>
            <div class="input-group mb-3">
              <div class="input-group input-group-seamless">
                <span class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons"></i>
                  </span>
                </span>
                <input type="submit" class="btn btn-outline-default form-control" placeholder="Masukan Nama Kategori" value="Simpan"> </div>
            </div>
          </form>
        </li>
      </ul>
    </div>
    <!-- / Input & Button Groups -->
</div>
<?php $this->load->view('template/footer'); ?>