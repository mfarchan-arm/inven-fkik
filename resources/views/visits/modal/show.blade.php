<!-- Modal -->
<div class="modal fade" id="show_visit" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <table class="table">
              <tr>
                <td style="width: 145px;">
                  <b>Nama</b>
                </td>
                <td style="width: 20px;">:</td>
                <td id="name"></td>
              </tr>
              <tr>
                <td style="width: 145px;">
                  <b>NPM</b>
                </td>
                <td style="width: 20px;">:</td>
                <td id="npm"></td>
              </tr>
              <tr>
                <td>
                  <b>Deskripsi</b>
                </td>
                <td>:</td>
                <td id="description"></td>
              </tr>
              <tr>
                <td>
                  <b>Jam Masuk</b>
                </td>
                <td>:</td>
                <td id="time_in"></td>
              </tr>
              <tr>
                <td>
                  <b>Jam Keluar</b>
                </td>
                <td>:</td>
                <td id="created_at"></td>
              </tr>
            </table>
          </div>
  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>