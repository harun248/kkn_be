<div class="container-fluid ">
    <main class="">
        <div class="card shadow my-4 px-3 pb-4">
            <h4 class="mb-3 mt-4">Ajukan pengajuan</h4>
            <div class="form-group">
                <select class="form-control form-control-user " id="fm_jenis" name="jenis" required="true">
                    <option value="0">Pilih Jenis Surat</option>
                    <?= $this->session->flashdata('message'); ?>
                    <?php foreach ($panduan as $key => $value) : ?>
                    <option value="<?=  $value["jenis"]; ?>"><?= str_replace("-", " ", $value["jenis"]); ?></option>
                    
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <textarea type="text" class="form-control form-control-user " id="fm_keterangan" name="keterangan" placeholder="keterangan" value="" required="true"></textarea>
            </div>

            <p>** Tipe file yang dizinkan : doc | docx | pdf | zip</p>

            <form method="post" action="<?= base_url("pengajuan/submit"); ?>" enctype="multipart/form-data" novalidate class="box">

                <div class="box__input">
                    <svg class="box__icon" xmlns="http://www.w3.org/2000/svg" width="50" height="43" viewBox="0 0 50 43">
                        <path d="M48.4 26.5c-.9 0-1.7.7-1.7 1.7v11.6h-43.3v-11.6c0-.9-.7-1.7-1.7-1.7s-1.7.7-1.7 1.7v13.2c0 .9.7 1.7 1.7 1.7h46.7c.9 0 1.7-.7 1.7-1.7v-13.2c0-1-.7-1.7-1.7-1.7zm-24.5 6.1c.3.3.8.5 1.2.5.4 0 .9-.2 1.2-.5l10-11.6c.7-.7.7-1.7 0-2.4s-1.7-.7-2.4 0l-7.1 8.3v-25.3c0-.9-.7-1.7-1.7-1.7s-1.7.7-1.7 1.7v25.3l-7.1-8.3c-.7-.7-1.7-.7-2.4 0s-.7 1.7 0 2.4l10 11.6z" /></svg>
                    <input type="file" name="files" id="file" class="box__file" />
                    <!-- <input type="file" name="files[]" id="file" class="box__file" data-multiple-caption="{count} files selected" multiple /> -->
                    <input type="hidden" value="" name="jenis" id="jenis" class="box__file" />
                    <input type="hidden" value="" name="keterangan" id="keterangan" class="box__file" />
                    <label for="file"><strong class="mr-1">Pilih file</strong><span class="box__dragndrop"> atau drag ke sini</span>.</label>
                    <button type="submit" class="box__button">Upload</button>
                </div>
                <div class="box__uploading">Uploading&hellip;</div>
                <div class="box__success">Selamat file anda telah terkirim! Mohon tunggu, Data akan segera kami proses.</div>
                <div class="box__error">Error! <span></span>. <a href="<?= base_url("pengajuan/submit"); ?>" class="box__restart" role="button">Coba lagi!</a></div>
            </form>



        </div>
    </main>


</div>