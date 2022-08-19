<h2>Pesan Pengiriman Disini</h2>

<form id="form-order" class="loops-forms" action="http://app.loops.id/save-order/form-artikel-mitra-logsitics" method="POST">
                            <div class="loops-group">
                    <label for="name">Nama lengkap <span class="red">*</span></label>
                    <input type="text" id="name" name="name" value="" placeholder="Tulis nama Anda" required>
                </div>
                        <div class="loops-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="" placeholder="Tulis email Anda" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                </div>
                        <div class="loops-group">
                    <label for="phone">No HP <span class="red">*</span></label>
                    <input type="text" id="phone" name="phone" value="" placeholder="Sebutkan nomor HP aktif Anda: contoh 081234567890" pattern="[0]{1}[0-9]{8,12}" required>
                </div>
                        <div class="loops-group">
                    <label for="address">Alamat lengkap <span class="red">*</span></label>
                    <textarea name="address" id="address" cols="30" rows="5" placeholder="Tulis alamat lengkap untuk pengiriman, (Kecamatan, Kota/Kabupaten, Provinsi, dan Kode Pos bila ada)" required></textarea>
                </div>
                        <div class="loops-group">
                    <label for="note">Catatan</label>
                    <textarea name="note" id="note" cols="30" rows="5" placeholder="Catatan bisa berupa spesifikasi barang yang dipesan, alternatif pilihan jika barang habis, dll."></textarea>
                </div>
                <div class="loops-group">
                <input type="submit" value="Beli Sekarang" class="loops-submit">
            </div>
            <input type="hidden" id="current" name="current" value="">
            <input type="hidden" name="redirect" value="">
            <input type="hidden" name="_loops_nonce" value="">
            <p class="loops-footer">Powered by <a href="https://loops.id/?utm_source=form-embed&utm_content=89940">Loops.id</a>.</p>
        </form>
            <script>
                var form = document.getElementById('form-order');
                form.addEventListener('submit', function(e){
                    
                    if ( "undefined" != typeof fbq ) {
                    
                                            fbq("track",  "AddToCart", {"source": "loops.id","version": "0.16.0"});
                                            
                    }
                });
            </script>