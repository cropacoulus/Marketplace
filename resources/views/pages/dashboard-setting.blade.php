@extends('layouts.dashboard')

@section('title')
    Store Settings
@endsection

@section('content')
  <div class="section-content section-dashboard-home" data-aos="fade-up">
      <div class="container-fluid">
          <div class="dashboard-heading">
              <h2 class="dashboard-title">Store Settings</h2>
              <p class="dashboard-subtitle">Make store that profitable</p>
          </div>
          <div class="dashboard-content">
              <div class="row">
                  <div class="col-12">
                      <form action="">
                          <div class="card">
                              <div class="card-body">
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label>Nama Toko</label>
                                              <input type="text" class="form-control">
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label>Kategori</label>
                                              <select class="form-control" name="categori">
                                                <option value="">Furniture</option>
                                              </select>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label>Store</label>
                                              <p class="text-muted">
                                                Apakah anda juga ingin membuka toko?
                                              </p>
                                              <div class="custom-control custom-radio custom-control-inline">
                                                  <input type="radio" id="openStoreTrue" name="is_store_open" class="custom-control-input"
                                                      value="true">
                                                  <label class="custom-control-label" for="openStoreTrue">Buka</label>
                                              </div>
                                              <div class="custom-control custom-radio custom-control-inline">
                                                  <input type="radio" id="openStoreFalse" name="is_store_open"
                                                      class="custom-control-input" value="false">
                                                  <label class="custom-control-label" for="openStoreFalse">Sementara Tutup</label>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col text-right">
                                          <button type="submit" class="btn btn-success px-5">
                                              Save Now
                                          </button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection