<!-- Modal -->
<div class="modal fade" id="commodity_create_modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form name="commodity_create">
          @csrf
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="item_code">Kode Barang</label>
                <input type="text" name="item_code" class="form-control" id="item_code_create">
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label for="acquisition">Asal Perolehan</label>
                <select class="custom-select" id="school_operational_assistance_id_create">
                  <option selected>Pilih</option>
                  @foreach($school_operational_assistances as $school_operational_assistance)
                  <option value="{{ $school_operational_assistance->id }}">{{ $school_operational_assistance->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4">
              <div class="form-group">
                <label for="name">Nama Barang</label>
                <input type="text" class="form-control" id="name_create">
              </div>
            </div>

            <div class="col-lg-4">
              <div class="form-group">
                <label for="brand">Merek</label>
                <input type="text" class="form-control" id="brand_create">
              </div>
            </div>

            <div class="col-lg-4">
              <div class="form-group">
                <label for="location">Ruangan</label>
                <select class="custom-select" id="commodity_location_id_create">
                  <option selected>Pilih</option>
                  @foreach($commodity_locations as $commodity_location)
                  <option value="{{ $commodity_location->id }}">{{ $commodity_location->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>

          </div>
          <hr>
          <div class="row">
            <div class="col-lg-4">
              <div class="form-group">
                <label for="quantity">Jumlah</label>
                <input type="number" class="form-control" id="quantity_create">
              </div>
            </div>

            <div class="col-lg-4">
              <div class="form-group">
                <label for="unit">Satuan</label>
                <input type="text" class="form-control" id="unit_create">
              </div>
            </div>

            <div class="col-lg-4">
              <div class="form-group">
                <label for="condition">Kondisi Barang</label>
                <select class="custom-select" id="condition_create">
                  <option selected>Pilih</option>
                  <option value="1">Baik</option>
                  <option value="2">Kurang Baik</option>
                  <option value="3">Rusak Berat</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="vendor">Nama vendor</label>
                <input type="text" class="form-control" id="vendor_create" >
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="note">Keterangan</label>
                <textarea class="form-control" id="note_create" rows="3"></textarea>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>