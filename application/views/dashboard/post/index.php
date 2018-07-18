<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/sidebar'); ?>
<div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
	    <div class="col-12 text-center text-sm-left mb-0">
		    <nav aria-label="breadcrumb">
			  	<ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
			    	<li class="breadcrumb-item active" aria-current="page">Blog Post</li>
			  	</ol>
			</nav>
	    </div>
	    </div>
    <!-- End Page Header -->
    <!-- Default Light Table -->
    <div class="row">
      <div class="col">
        <div class="card card-small mb-4">
          <div class="card-header border-bottom">
          <a href="<?= base_url('blogpost/create') ?>" class="btn btn-white float-right">Tambah Post</a>
            <h6 class="m-0">Daftar Kategori</h6>
          </div>
          <div class="card-body p-0 pb-3 text-center">
            <table class="table mb-0">
              <thead class="bg-light">
                <tr>
                  <th class="border-0">#</th>
                  <th class="border-0">Kategori</th>
                  <th class="border-0">Judul</th>
                  <th class="border-0">Tanggal</th>
                  <th class="border-0">Action</th>
                </tr>
              </thead>
                <tbody>
                	<tr>
                        <td>1</td>
                        <td class="">Sepak Bola</td>
                        <td class="">Kekalahan Crotia Atas Prancis</td>
                        <td class=""></td>
                        <td><a href="<?= base_url('blogpost/edit/')?>" class="btn-sm btn-outline-primary">Edit</a>
                        <a href="<?= base_url('blogpost/delete/')?>" class="btn-sm btn-outline-danger">Hapus</a></td>
                    </tr>
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- End Default Light Table -->
<!-- End Page Header -->
</div>
<?php $this->load->view('template/footer'); ?>