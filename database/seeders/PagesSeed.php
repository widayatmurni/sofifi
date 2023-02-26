<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PagesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            [
                'title' => 'Beranda',
                'slug' => 'dashboard',
                'language_id' => 1,
                'page' => '<main class="page-full-single">
                  <div id="dashboard">
                    <div class="header">
              
                      <div class="instansi">
                        <img class="logo" src="../assets/vectors/logoditjenim.png" alt="logo">
                        <div class="text">
                          <div class="kl">Kementerian Hukum dan HAM RI</div>
                          <div class="kantor">Kantor Imigrasi Kelas I TPI Ternate</div>
                          <div class="address">Jl. SKSD Kalumpang Ternate Tengah, Kota Ternate, Maluku Utara</div>
                        </div>
                      </div>
              
                      <div class="apps">
                        <img class="app-brand" src="../assets/vectors/logoapp.png" alt="app">
                        <div class="names">
                          <div class="app-name">SOFIFI</div>
                          <div class="app-name-2">Sitem Operasi Interaktif Imigrasi</div>
                        </div>
                      </div>
              
                    </div>
              
                    <div class="contents">
                      <video class="vid-player" src="../assets/cobas.mov" autoplay />
                    </div>
              
                    <div class="float-nav">
                      <div class="nav-box">
                        <a href="/gallery" class="nav-btn nav-item">
                          <i class="icon-gallery"></i>
                          Gallery
                        </a>
              
                        <a href="/news" class="nav-btn nav-item">
                          <i class="icon-news"></i>
                          Buletin
                        </a>
              
                        <a href="/pages/wna-menu" class="nav-btn nav-item">
                          <i class="icon-wna"></i>
                          WNA
                        </a>
              
                        <div class="nav-btn nav-language">
                          <span class="text">ID</span>
                          <img class="flag" src="../assets/icons/flag_id.svg" alt="flag">
                        </div>
              
                        <a href="/pages/wni-menu" class="nav-btn nav-item">
                          <i class="icon-wni"></i>
                          WNI
                        </a>
              
                        <a href="/contact" class="nav-btn nav-item">
                          <i class="icon-contact"></i>
                          Kontak
                        </a>
              
                        <a href="/survei" class="nav-btn nav-item">
                          <i class="icon-survei"></i>
                          Survei
                        </a>
              
                      </div>
                    </div>
              
                    <div class="dialog-choose-language">
                      <div class="choose-language overlay-bg">
              
                        <div class="language-box">
                          <div class="items">
              
                            <div class="language-item" data-href="pages/set-lang/id">
                              <div class="c-flag">
                                <img class="flag" src="../assets/icons/flag_id.svg" alt="id">
                              </div>
                              <div class="text">Indonesia</div>
                            </div>
              
                            <div class="language-item" data-href="pages/set-lang/en">
                              <div class="c-flag">
                                <img class="flag" src="../assets/icons/flag_us.svg" alt="us">
                              </div>
                              <div class="text">Inggris</div>
                            </div>
              
                            <div class="language-item" data-href="pages/set-lang/ch">
                              <div class="c-flag">
                                <img class="flag" src="../assets/icons/flag_ch.svg" alt="ch">
                              </div>
                              <div class="text">China</div>
                            </div>
              
                            <div class="language-item" data-href="pages/set-lang/ko">
                              <div class="c-flag">
                                <img class="flag" src="../assets/icons/flag_ko.svg" alt="ko">
                              </div>
                              <div class="text">Korea Selatan</div>
                            </div>
              
                          </div>
                        </div>
              
                      </div>
                    </div>
                  </div>
              
                </main>',
            ], [
                'title' => 'WNI Menu',
                'slug' => 'wni-menu',
                'language_id' => 1,
                'page' => '<main class="page-full-single">
                    <div class="c-header">
                      <div class="office">
                        <img class="logo" src="../assets/vectors/logoditjenim.png" alt="logo">
                      </div>
                      <div class="title">
                        <h2>Layanan Imigrasi Bagi Warga Negara Indonesia ( WNI )</h2>
                      </div>
                    </div>
                    <div id="wni-menu">
                      <div class="overlay"></div>
                      <div class="menus">
                
                        <a href="definition" class="menu" data-href="definition">
                          <div class="icon-box">
                            <i class="icon-definition"></i>
                          </div>
                          <div class="text">Definisi</div>
                        </a>
                
                        <a href="requirement" class="menu" data-href="requirement">
                          <div class="icon-box">
                            <i class="icon-requirement"></i>
                          </div>
                          <div class="text">Persyaratan</div>
                        </a>
                
                        <a href="price" class="menu" data-href="price">
                          <div class="icon-box">
                            <i class="icon-price"></i>
                          </div>
                          <div class="text">Tarif</div>
                        </a>
                
                        <a href="flow" class="menu" data-href="flow">
                          <div class="icon-box">
                            <i class="icon-flow"></i>
                          </div>
                          <div class="text">Alur Proses</div>
                        </a>
                
                        <a href="mpaspor" class="menu" data-href="mpaspor">
                          <div class="icon-box">
                            <i class="icon-mpaspor"></i>
                          </div>
                          <div class="text">M-Paspor</div>
                        </a>
                
                      </div>
                    </div>
                
                    <div class="float-menu">
                      <a href="dashboard" class="nav-single">
                        <i class="icon-dashboard"></i>
                        <span class="nav-text">Dashboard</span>
                      </a>
                    </div>
                  </main>
                ',
            ], [
                'title' => 'WNA Menu',
                'slug' => 'wna-menu',
                'language_id' => 1,
                'page' => '<main class="page-full-single">
                  <div class="c-header">
                    <div class="office">
                      <img class="logo" src="../assets/vectors/logoditjenim.png" alt="logo">
                    </div>
                    <div class="title">
                      <h2>Layanan Imigrasi Bagi Warga Negara Asing ( WNA )</h2>
                    </div>
                  </div>
                  <div id="wna-menu">
                    <div class="overlay"></div>
                    <div class="menus">
              
                      <a href="wna-definition" class="menu">
                        <div class="icon-box">
                          <i class="icon-definition"></i>
                        </div>
                        <div class="text">Definisi</div>
                      </a>
              
                      <a href="wna-requirement" class="menu">
                        <div class="icon-box">
                          <i class="icon-requirement"></i>
                        </div>
                        <div class="text">Persyaratan</div>
                      </a>
              
                      <a href="wna-price" class="menu">
                        <div class="icon-box">
                          <i class="icon-price"></i>
                        </div>
                        <div class="text">Tarif</div>
                      </a>
              
                      <a href="wna-flow" class="menu">
                        <div class="icon-box">
                          <i class="icon-flow"></i>
                        </div>
                        <div class="text">Alur Proses</div>
                      </a>
              
                    </div>
                  </div>
              
                  <div class="float-menu">
                    <a href="dashboard" class="nav-single">
                      <i class="icon-dashboard"></i>
                      <span class="nav-text">Dashboard</span>
                    </a>
                  </div>
                </main>',
            ], [
              'title' => 'Definisi Paspor',
              'slug' => 'definition',
              'language_id' => 1,
              'page' => '<main class="page-full-single">
                <div class="c-header">
                  <div class="office">
                    <img class="logo" src="../assets/vectors/logoditjenim.png" alt="logo">
                  </div>
                  <div class="title">
                    <h2>Definisi Paspor Republik Indonesia</h2>
                  </div>
                </div>
            
                <div id="wni-definitions">
                  <div class="definition">
                    <p>
                      <strong>Paspor Republik Indonesia</strong> yang selanjutnya disebut <strong>Paspor</strong> adalah dokumen
                      yang
                      dikeluarkan oleh Pemerintah Republik Indonesia kepada warga negara Indonesia untuk melakukan perjalanan antar
                      negara yang berlaku selama jangka waktu tertentu.
                    </p>
                    <a href="definition-services" class="btn-jenis-layanan nav-link">Jenis Layanan Paspor
                  </div>
                </div>
                </div>
            
                <div class="float-menu">
                  <a href="wni-menu" class="nav-single to-back">
                    <i class="icon-back"></i>
                    <span class="text nav-back">Kembali</span>
                  </a>
                </div>
              </main>',
            ], [
              'title' => 'Definisi Jenis Layanan Paspor',
              'slug' => 'definition-services',
              'language_id' => 1,
              'page' => '<main class="page-full-single">
                <div class="c-header">
                  <div class="office">
                    <img class="logo" src="../assets/vectors/logoditjenim.png" alt="logo">
                  </div>
                  <div class="title">
                    <h2>Jenis Layanan Paspor RI</h2>
                  </div>
                </div>
            
                <div id="wni-definition-services">
                  <div class="options">
            
                    <div class="option-btn modal-button" data-href="pass-new">Permohonan Paspor Baru</div>
                    <div class="option-btn modal-button" data-href="pass-expired">Permohonan Penggantian Paspor</div>
                    <div class="option-btn modal-button" data-href="pass-lost">Permohonan Penggantian Paspor Hilang</div>
                    <div class="option-btn modal-button" data-href="pass-broke">Permohonan Penggantian Paspor Rusak</div>
            
                  </div>
                </div>
            
                <div id="modal-pass-new" class="modal-dialog">
                  <div class="overlay__modal modal-center">
                    <div class="modal__container">
                      <div class="modal__content">
            
                        <svg class="corner-bg" width="360px" height="309px" viewBox="0 0 360 309" version="1.1"
                          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <g id="pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="WNI-Definisi-Copy" transform="translate(-269.000000, -262.000000)">
                              <g id="Group" transform="translate(269.000000, 262.000000)">
                                <path
                                  d="M0,0 L0,309 C45.9920249,291.424626 76.3191253,271.228721 90.9813012,248.412284 C102.993127,229.720171 111.656388,194.980635 116.971083,144.193679 C119.234318,122.566318 134.961822,104.7528 156.142091,99.827234 L179.866113,94.3101066 C196.776219,90.3775859 210.524302,78.1127401 216.353487,61.7592392 L218.725398,55.1049579 C224.649296,38.4857464 238.742218,26.1088439 255.987188,22.3803369 L293.876312,14.188391 C297.74958,13.3509581 300.21061,9.53218042 299.373177,5.65891246 C298.659226,2.35676896 295.738449,6.25905766e-13 292.360005,0 L0,0 L0,0 Z"
                                  id="Path-18" fill="#11375C"></path>
                                <path
                                  d="M245.311535,49 C241.075181,71.6162484 232.93114,87.4442922 220.879413,96.4841314 C208.827687,105.523971 188.034549,112.02926 158.5,116"
                                  id="Path-19" stroke="#11375C" stroke-width="8" stroke-linecap="round"></path>
                              </g>
                            </g>
                          </g>
                        </svg>
                        <p class="content">
                          <strong>PERMOHONAN PASPOR BARU</strong> adalah Permohonan yang diajukan oleh Warga Negara Indonesia
                          yang belum pernah memiliki paspor sebelumnya (paspor lama). Permohonan paspor baru dilakukan melalui
                          permohonan online atau datang langsung ke Kantor Imigrasi.
                        </p>
                      </div>
                      <div class="modal__footer">
                        <button id="modal-close" class="btn with-btn-close">OK</button>
                      </div>
                    </div>
                  </div>
                </div>
            
                <div id="modal-pass-expired" class="modal-dialog">
                  <div class="overlay__modal modal-center">
                    <div class="modal__container">
                      <div class="modal__content">
            
                        <svg width="360px" height="309px" viewBox="0 0 360 309" version="1.1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink">
                          <g id="pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Group" transform="translate(-269.000000, -262.000000)" filter="url(#filter-1)">
                              <g transform="translate(269.000000, 262.000000)">
                                <path
                                  d="M0,0 L0,309 C45.9920249,291.424626 76.3191253,271.228721 90.9813012,248.412284 C102.993127,229.720171 111.656388,194.980635 116.971083,144.193679 C119.234318,122.566318 134.961822,104.7528 156.142091,99.827234 L179.866113,94.3101066 C196.776219,90.3775859 210.524302,78.1127401 216.353487,61.7592392 L218.725398,55.1049579 C224.649296,38.4857464 238.742218,26.1088439 255.987188,22.3803369 L293.876312,14.188391 C297.74958,13.3509581 300.21061,9.53218042 299.373177,5.65891246 C298.659226,2.35676896 295.738449,6.25905766e-13 292.360005,0 L0,0 L0,0 Z"
                                  id="Path-18" fill="#2F5B4F"></path>
                                <path
                                  d="M245.311535,49 C241.075181,71.6162484 232.93114,87.4442922 220.879413,96.4841314 C208.827687,105.523971 188.034549,112.02926 158.5,116"
                                  id="Path-19" stroke="#2F5B4F" stroke-width="8" stroke-linecap="round"></path>
                              </g>
                            </g>
                          </g>
                        </svg>
                        <p class="content">
                          <strong>PERMOHONAN PENGANTIAN PASPOR</strong> adalah Permohonan yang diajukan oleh Warga Negara Indonesia
                          yang belum pernah memiliki paspor sebelumnya (paspor lama). Permohonan paspor baru dilakukan melalui
                          permohonan online atau datang langsung ke Kantor Imigrasi.
                        </p>
                      </div>
                      <div class="modal__footer">
                        <button id="modal-close" class="btn with-btn-close">OK</button>
                      </div>
                    </div>
                  </div>
                </div>
            
                <div id="modal-pass-lost" class="modal-dialog">
                  <div class="overlay__modal modal-center">
                    <div class="modal__container">
                      <div class="modal__content">
            
                        <svg width="360px" height="309px" viewBox="0 0 360 309" version="1.1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink">
                          <g id="pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="WNI-Definisi-Copy" transform="translate(-269.000000, -262.000000)">
                              <g id="Group" transform="translate(269.000000, 262.000000)">
                                <path
                                  d="M0,0 L0,309 C45.9920249,291.424626 76.3191253,271.228721 90.9813012,248.412284 C102.993127,229.720171 111.656388,194.980635 116.971083,144.193679 C119.234318,122.566318 134.961822,104.7528 156.142091,99.827234 L179.866113,94.3101066 C196.776219,90.3775859 210.524302,78.1127401 216.353487,61.7592392 L218.725398,55.1049579 C224.649296,38.4857464 238.742218,26.1088439 255.987188,22.3803369 L293.876312,14.188391 C297.74958,13.3509581 300.21061,9.53218042 299.373177,5.65891246 C298.659226,2.35676896 295.738449,6.25905766e-13 292.360005,0 L0,0 L0,0 Z"
                                  id="Path-18" fill="#F3D10D"></path>
                                <path
                                  d="M245.311535,49 C241.075181,71.6162484 232.93114,87.4442922 220.879413,96.4841314 C208.827687,105.523971 188.034549,112.02926 158.5,116"
                                  id="Path-19" stroke="#F3D10D" stroke-width="8" stroke-linecap="round"></path>
                              </g>
                            </g>
                          </g>
                        </svg>
                        <p class="content">
                          <strong>PERMOHONAN PENGANTIAN PASPOR HILANG</strong> adalah Permohonan yang diajukan oleh Warga Negara
                          Indonesia
                          yang belum pernah memiliki paspor sebelumnya (paspor lama). Permohonan paspor baru dilakukan melalui
                          permohonan online atau datang langsung ke Kantor Imigrasi.
                        </p>
                      </div>
                      <div class="modal__footer">
                        <button id="modal-close" class="btn with-btn-close">OK</button>
                      </div>
                    </div>
                  </div>
                </div>
            
                <div id="modal-pass-broke" class="modal-dialog">
                  <div class="overlay__modal modal-center">
                    <div class="modal__container">
                      <div class="modal__content">
            
                        <svg width="300px" height="309px" viewBox="0 0 300 309" version="1.1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink">
                          <g id="pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="WNI-Definisi-Copy" transform="translate(-269.000000, -262.000000)" fill="#FBAF17">
                              <g id="Group" transform="translate(269.000000, 262.000000)">
                                <path
                                  d="M0,0 L0,309 C45.9920249,291.424626 76.3191253,271.228721 90.9813012,248.412284 C102.993127,229.720171 111.656388,194.980635 116.971083,144.193679 C119.234318,122.566318 134.961822,104.7528 156.142091,99.827234 L179.866113,94.3101066 C196.776219,90.3775859 210.524302,78.1127401 216.353487,61.7592392 L218.725398,55.1049579 C224.649296,38.4857464 238.742218,26.1088439 255.987188,22.3803369 L293.876312,14.188391 C297.74958,13.3509581 300.21061,9.53218042 299.373177,5.65891246 C298.659226,2.35676896 295.738449,6.25905766e-13 292.360005,0 L0,0 L0,0 Z"
                                  id="Path-18"></path>
                              </g>
                            </g>
                          </g>
                        </svg>
                        <p class="content">
                          <strong>PERMOHONAN PENGANTIAN PASPOR RUSAK</strong> adalah Permohonan yang diajukan oleh Warga Negara
                          Indonesia
                          yang belum pernah memiliki paspor sebelumnya (paspor lama). Permohonan paspor baru dilakukan melalui
                          permohonan online atau datang langsung ke Kantor Imigrasi.
                        </p>
                      </div>
                      <div class="modal__footer">
                        <button id="modal-close" class="btn with-btn-close">OK</button>
                      </div>
                    </div>
                  </div>
                </div>
            
                <div class="float-menu">
                  <a href="definition" class="nav-single to-back">
                    <i class="icon-back"></i>
                    <span class="text nav-back">Kembali</span>
                  </a>
                </div>
              </main>',
            ], [
              'title' => 'Persyaratan Paspor',
              'slug' => 'requirement',
              'language_id' => 1,
              'page' => '<main class="page-full-single">
                <div class="c-header">
                  <div class="office">
                    <img class="logo" src="../assets/vectors/logoditjenim.png" alt="logo">
                  </div>
                  <div class="title">
                    <h2>Persyaratan Permohonan Paspor</h2>
                  </div>
                </div>
            
                <div id="requirements">
            
                  <div class="content-box-center left-picture">
                    <table class="table-button-box">
                      <tr>
                        <td>
                          <div class="content-btn">
                            <div class="button btn-link modal-button" data-href="pass-new">Permohonan Pembuatan Paspor Baru
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="content-btn">
                            <div class="button btn-link modal-button" data-href="pass-expired">Permohonan Penggantian Paspor
                              Habis Masa
                              Berlaku</div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="content-btn">
                            <div class="button btn-link modal-button" data-href="pass-lost">Permohonan Penggantian Paspor
                              Hilang</div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="content-btn">
                            <div class="button btn-link modal-button" data-href="pass-broke">Permohonan Penggantian Paspor
                              Rusak</div>
                          </div>
                        </td>
                      </tr>
            
                    </table>
                  </div>
            
                </div>
            
                <!-- MODAL -->
                <div id="modal-pass-new" class="modal-dialog">
                  <div class="overlay__modal-full modal-full with-btn-close">
                    <div class="modal__container">
                      <div class="header transparent">
                        <h2 class="title">Persyaratan Permohona Paspor Baru</h2>
                        <div class="with-btn-close btn"></div>
                      </div>
                      <div class="body">
            
                        <div class="content">
                          <div class="persyaratans">
                            <div class="s-card">
                              <div class="content-image">
                                <img class="img-potrait" src="../assets/vectors/fc-ektp.png" alt="E-KTP">
                              </div>
                              <div class="text-title">Fotokopi E-KTP</div>
                            </div>
            
                            <div class="s-card">
                              <div class="content-image">
                                <img class="img-potrait" src="../assets/vectors/fc-kk.png" alt="E-KTP">
                              </div>
                              <div class="text-title">Fotokopi Kartu Keluarga</div>
                            </div>
            
                            <div class="s-card">
                              <div class="content-image">
                                <img class="img-potrait img-rotate-1" src="../assets/vectors/aktalahir.png" alt="E-KTP">
                                <img class="img-potrait img-rotate-2" src="../assets/vectors/ijazah.png" alt="E-KTP">
                                <img class="img-potrait img-rotate-3" src="../assets/vectors/ijazah.png" alt="E-KTP">
                              </div>
                              <div class="text-title">Fotokopi Akta Kelahiran / Ijazah / Surat Nikah (Tertera Nama Orang Tua)</div>
                            </div>
            
                          </div>
                        </div>
                        <div class="notes">
                          <p class="text-italic">
                            Tarif sesuai Permenkumham RI Nomor 17 Tahun 2022 tentang Persyaratan Pembuatan
                            Paspor bagi Warga Negara Indonesia
                          </p>
                        </div>
            
                      </div>
                    </div>
                  </div>
                </div>
            
                <div id="modal-pass-expired" class="modal-dialog">
                  <div class="overlay__modal-full modal-full with-btn-close">
                    <div class="modal__container">
                      <div class="header transparent">
                        <h2 class="title">Persyaratan Permohonan Penggantian Paspor</h2>
                        <div class="with-btn-close btn"></div>
                      </div>
                      <div class="body">
            
                        <div class="content">
                          <div class="persyaratans">
                            <div class="s-card">
                              <div class="content-image">
                                <img class="img-potrait" src="../assets/vectors/fc-ektp.png" alt="E-KTP">
                              </div>
                              <div class="text-title">Fotokopi E-KTP</div>
                            </div>
            
                            <div class="s-card">
                              <div class="content-image">
                                <img class="img-potrait" src="../assets/vectors/fc-kk.png" alt="E-KTP">
                              </div>
                              <div class="text-title">Fotokopi Kartu Keluarga</div>
                            </div>
            
                            <div class="s-card">
                              <div class="content-image">
                                <img class="img-potrait" src="../assets/vectors/fc-kk.png" alt="E-KTP">
                              </div>
                              <div class="text-title">Melampirkan Paspor lama</div>
                            </div>
            
                            <div class="s-card">
                              <div class="content-image">
                                <img class="img-potrait img-rotate-1" src="../assets/vectors/aktalahir.png" alt="E-KTP">
                                <img class="img-potrait img-rotate-2" src="../assets/vectors/ijazah.png" alt="E-KTP">
                                <img class="img-potrait img-rotate-3" src="../assets/vectors/ijazah.png" alt="E-KTP">
                              </div>
                              <div class="text-title">Fotokopi Akta Kelahiran / Ijazah / Surat Nikah (Tertera Nama Orang Tua)</div>
                            </div>
            
            
                          </div>
                        </div>
                        <div class="notes">
                          <p class="text-italic">
                            Tarif sesuai Permenkumham RI Nomor 17 Tahun 2022 tentang Persyaratan Pembuatan
                            Paspor bagi Warga Negara Indonesia
                          </p>
                        </div>
            
            
                      </div>
                    </div>
                  </div>
                </div>
            
                <div id="modal-pass-lost" class="modal-dialog">
                  <div class="overlay__modal-full modal-full with-btn-close">
                    <div class="modal__container">
                      <div class="header transparent">
                        <h2 class="title">Persyaratan Permohonan Penggantian Hilang</h2>
                        <div class="with-btn-close btn"></div>
                      </div>
                      <div class="body">
            
                        <div class="content">
                          <div class="persyaratans">
                            <div class="s-card">
                              <div class="content-image">
                                <img class="img-potrait" src="../assets/vectors/fc-ektp.png" alt="E-KTP">
                              </div>
                              <div class="text-title">Fotokopi E-KTP</div>
                            </div>
            
                            <div class="s-card">
                              <div class="content-image">
                                <img class="img-potrait" src="../assets/vectors/fc-kk.png" alt="E-KTP">
                              </div>
                              <div class="text-title">Fotokopi Kartu Keluarga</div>
                            </div>
            
                            <div class="s-card">
                              <div class="content-image">
                                <img class="img-potrait" src="../assets/vectors/suket-hilang.png" alt="E-KTP">
                              </div>
                              <div class="text-title">Surat Keterangan Kehilangan dari Kepolisian</div>
                            </div>
            
                            <div class="s-card">
                              <div class="content-image">
                                <img class="img-potrait img-rotate-1" src="../assets/vectors/aktalahir.png" alt="E-KTP">
                                <img class="img-potrait img-rotate-2" src="../assets/vectors/ijazah.png" alt="E-KTP">
                                <img class="img-potrait img-rotate-3" src="../assets/vectors/ijazah.png" alt="E-KTP">
                              </div>
                              <div class="text-title">Fotokopi Akta Kelahiran / Ijazah / Surat Nikah (Tertera Nama Orang Tua)</div>
                            </div>
            
            
                          </div>
                        </div>
                        <div class="notes">
                          <p class="text-italic">
                            Tarif sesuai Permenkumham RI Nomor 17 Tahun 2022 tentang Persyaratan Pembuatan
                            Paspor bagi Warga Negara Indonesia
                          </p>
                        </div>
            
            
                      </div>
                    </div>
                  </div>
                </div>
            
                <div id="modal-pass-broke" class="modal-dialog">
                  <div class="overlay__modal-full modal-full with-btn-close">
                    <div class="modal__container">
                      <div class="header transparent">
                        <h2 class="title">Persyaratan Permohonan Penggantian Rusak</h2>
                        <div class="with-btn-close btn"></div>
                      </div>
                      <div class="body">
            
                        <div class="content">
                          <div class="persyaratans">
                            <div class="s-card">
                              <div class="content-image">
                                <img class="img-potrait" src="../assets/vectors/fc-ektp.png" alt="E-KTP">
                              </div>
                              <div class="text-title">Fotokopi E-KTP</div>
                            </div>
            
                            <div class="s-card">
                              <div class="content-image">
                                <img class="img-potrait" src="../assets/vectors/fc-kk.png" alt="E-KTP">
                              </div>
                              <div class="text-title">Fotokopi Kartu Keluarga</div>
                            </div>
            
                            <div class="s-card">
                              <div class="content-image">
                                <img class="img-potrait img-rotate-1" src="../assets/vectors/suket.png" alt="E-KTP">
                                <img class="img-potrait img-rotate-2" src="../assets/vectors/ijazah.png" alt="E-KTP">
                              </div>
                              <div class="text-title">Surat Keterangan Serta Melampirkan Paspor lama</div>
                            </div>
            
                            <div class="s-card">
                              <div class="content-image">
                                <img class="img-potrait img-rotate-1" src="../assets/vectors/aktalahir.png" alt="E-KTP">
                                <img class="img-potrait img-rotate-2" src="../assets/vectors/ijazah.png" alt="E-KTP">
                                <img class="img-potrait img-rotate-3" src="../assets/vectors/ijazah.png" alt="E-KTP">
                              </div>
                              <div class="text-title">Fotokopi Akta Kelahiran / Ijazah / Surat Nikah (Tertera Nama Orang Tua)</div>
                            </div>
            
            
                          </div>
                        </div>
                        <div class="notes">
                          <p class="text-italic">
                            Tarif sesuai Permenkumham RI Nomor 17 Tahun 2022 tentang Persyaratan Pembuatan
                            Paspor bagi Warga Negara Indonesia
                          </p>
                        </div>
            
            
                      </div>
                    </div>
                  </div>
                </div>

                <div class="float-menu">
                  <a href="wni-menu" class="nav-single to-back">
                    <i class="icon-back"></i>
                    <span class="text nav-back">Kembali</span>
                  </a>
                </div>
            
              </main>',
            ], [
              'title' => 'Tarif Pelayanan Paspor',
              'slug' => 'price',
              'language_id' => 1,
              'page' => '<main class="page-full-single">
                <div class="c-header">
                  <div class="office">
                    <img class="logo" src="../assets/vectors/logoditjenim.png" alt="logo">
                  </div>
                  <div class="title">
                    <h2>Tarif Layanan Imigrasi Bagi WNI</h2>
                  </div>
                </div>
            
                <div id="wni-prices">
                  <div class="container-center">
            
                    <table id="t-buttons" class="options">
                      <tbody>
                        <tr>
                          <td>
                            <div class="button btn-link modal-button" data-href="biasa">
                              <span class="text">Papor Biasa 48 Halaman</span>
                              <span class="price">
                                <span class="unit">Rp.</span>
                                <span class="value">350.000</span>
                              </span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="button btn-link modal-button" data-href="el">
                              <span class="text">Papor Biasa 48 Halaman Elektronik</span>
                              <span class="price">
                                <span class="unit">Rp.</span>
                                <span class="value">350.000</span>
                              </span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="button btn-link modal-button" data-href="percepatan">
                              <span class="text">Layanan percepatan penerbitan Paspor selesai pada hari yang sama</span>
                              <span class="price">
                                <span class="unit">Rp.</span>
                                <span class="value">1.000.000</span>
                              </span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="button btn-link modal-button" data-href="rusak">
                              <span class="text">Permohonan Penggantian Paspor Rusak </span>
                              <span class="price">
                                <span class="unit">Rp.</span>
                                <span class="value">1.000.000</span>
                              </span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="button btn-link modal-button" data-href="hilang">
                              <span class="text">Permohonan Penggantian Paspor Hilang </span>
                              <span class="price">
                                <span class="unit">Rp.</span>
                                <span class="value">1.000.000</span>
                              </span>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
            
                  </div>
                </div>
            
                <!-- MODAL PAS BIASA -->
                <div id="modal-biasa" class="modal-dialog">
                  <div class="overlay__modal modal-center-75">
                    <div class="modal__container">
                      <div class="header">
                        <div class="with-btn-close btn-float btn"></div>
                      </div>
                      <div class="body">
                        <!-- Content -->
                        <div class="content">
            
                          <div class="list-items">
                            <div class="item">
                              <div class="label">Jenis</div>
                              <div class="value"><strong>Paspor Baru 48 Halaman</strong></div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif Dalam</div>
                              <div class="value">Rp ( Rupiah )</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif</div>
                              <div class="value">500.000</div>
                            </div>
                            <div class="item">
                              <div class="label">Deskripsi</div>
                              <div class="value">
                                <p>
                                  Pembuatan Paspor Baru yang diperuntukan bagi Warga Negara Indonesia Yang Telah barumur lebih dari
                                  17 Tahun.
                                </p>
                              </div>
                            </div>
                          </div>
            
                        </div>
                        <!-- NOtes -->
                        <div class="notes">
                          <p class="text-italic">
                            Tarif sesuai Permenkumham RI Nomor 17 Tahun 2022 tentang Persyaratan Pembuatan
                            Paspor bagi Warga Negara Indonesia
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            
                <!-- MODAL PAS ELEKTRONEIK-->
                <div id="modal-el" class="modal-dialog">
                  <div class="overlay__modal modal-center-75">
                    <div class="modal__container">
                      <div class="header">
                        <div class="with-btn-close btn-float btn"></div>
                      </div>
                      <div class="body">
                        <!-- Content -->
                        <div class="content">
            
                          <div class="list-items">
                            <div class="item">
                              <div class="label">Jenis</div>
                              <div class="value"><strong>Paspor Baru 48 Halaman Elektronik</strong></div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif Dalam</div>
                              <div class="value">Rp ( Rupiah )</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif</div>
                              <div class="value">500.000</div>
                            </div>
                            <div class="item">
                              <div class="label">Deskripsi</div>
                              <div class="value">
                                <p>
                                  Pembuatan Paspor Baru yang diperuntukan bagi Warga Negara Indonesia Yang Telah barumur lebih dari
                                  17 Tahun.
                                </p>
                              </div>
                            </div>
                          </div>
            
                        </div>
                        <!-- NOtes -->
                        <div class="notes">
                          <p class="text-italic">
                            Tarif sesuai Permenkumham RI Nomor 17 Tahun 2022 tentang Persyaratan Pembuatan
                            Paspor bagi Warga Negara Indonesia
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            
                <!-- MODAL PAS Percepatan-->
                <div id="modal-percepatan" class="modal-dialog">
                  <div class="overlay__modal modal-center-75">
                    <div class="modal__container">
                      <div class="header">
                        <div class="with-btn-close btn-float btn"></div>
                      </div>
                      <div class="body">
                        <!-- Content -->
                        <div class="content">
            
                          <div class="list-items">
                            <div class="item">
                              <div class="label">Jenis</div>
                              <div class="value"><strong>Layanan Percepatan Pembuatan Paspor</strong></div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif Dalam</div>
                              <div class="value">Rp ( Rupiah )</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif</div>
                              <div class="value">1.000.000</div>
                            </div>
                            <div class="item">
                              <div class="label">Deskripsi</div>
                              <div class="value">
                                <p>
                                  Pembuatan Paspor Baru yang diperuntukan bagi Warga Negara Indonesia Yang Telah barumur lebih dari
                                  17 Tahun.
                                </p>
                              </div>
                            </div>
                          </div>
            
                        </div>
                        <!-- NOtes -->
                        <div class="notes">
                          <p class="text-italic">
                            Tarif sesuai Permenkumham RI Nomor 17 Tahun 2022 tentang Persyaratan Pembuatan
                            Paspor bagi Warga Negara Indonesia
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            
                <!-- MODAL PAS RUSAK-->
                <div id="modal-rusak" class="modal-dialog">
                  <div class="overlay__modal modal-center-75">
                    <div class="modal__container">
                      <div class="header">
                        <div class="with-btn-close btn-float btn"></div>
                      </div>
                      <div class="body">
                        <!-- Content -->
                        <div class="content">
            
                          <div class="list-items">
                            <div class="item">
                              <div class="label">Jenis</div>
                              <div class="value"><strong>Layanan Permohonan Penggantian Paspor Rusak</strong></div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif Dalam</div>
                              <div class="value">Rp ( Rupiah )</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif</div>
                              <div class="value">1.000.000</div>
                            </div>
                            <div class="item">
                              <div class="label">Deskripsi</div>
                              <div class="value">
                                <p>
                                  Pembuatan Paspor Baru yang diperuntukan bagi Warga Negara Indonesia Yang Telah barumur lebih dari
                                  17 Tahun.
                                </p>
                              </div>
                            </div>
                          </div>
            
                        </div>
                        <!-- NOtes -->
                        <div class="notes">
                          <p class="text-italic">
                            Tarif sesuai Permenkumham RI Nomor 17 Tahun 2022 tentang Persyaratan Pembuatan
                            Paspor bagi Warga Negara Indonesia
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- MODAL PAS HILANG-->
                <div id="modal-hilang" class="modal-dialog">
                  <div class="overlay__modal modal-center-75">
                    <div class="modal__container">
                      <div class="header">
                        <div class="with-btn-close btn-float btn"></div>
                      </div>
                      <div class="body">
                        <!-- Content -->
                        <div class="content">
            
                          <div class="list-items">
                            <div class="item">
                              <div class="label">Jenis</div>
                              <div class="value"><strong>Layanan Permohonan Penggantian Paspor Hilang</strong></div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif Dalam</div>
                              <div class="value">Rp ( Rupiah )</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif</div>
                              <div class="value">1.000.000</div>
                            </div>
                            <div class="item">
                              <div class="label">Deskripsi</div>
                              <div class="value">
                                <p>
                                  Pembuatan Paspor Baru yang diperuntukan bagi Warga Negara Indonesia Yang Telah barumur lebih dari
                                  17 Tahun.
                                </p>
                              </div>
                            </div>
                          </div>
            
                        </div>
                        <!-- NOtes -->
                        <div class="notes">
                          <p class="text-italic">
                            Tarif sesuai Permenkumham RI Nomor 17 Tahun 2022 tentang Persyaratan Pembuatan
                            Paspor bagi Warga Negara Indonesia
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            
                <div class="float-menu">
                  <a href="wni-menu" class="nav-single to-back">
                    <i class="icon-back"></i>
                    <span class="text nav-back">Kembali</span>
                  </a>
                </div>
              </main>',
            ], [
              'title' => 'Alur Pelayanan Paspor',
              'slug' => 'flow',
              'language_id' => 1,
              'page' => '<main class="page-full-single">
                <div class="c-header">
                  <div class="office">
                    <img class="logo" src="../assets/vectors/logoditjenim.png" alt="logo">
                  </div>
                  <div class="title">
                    <h2>Alur Proses Permohonan Paspor</h2>
                  </div>
                </div>
            
                <div id="wni-alur">
                  <div class="container-center">
                    <table id="t-buttons" class="container-button">
                      <tr>
                        <td>
                          <div class="button btn-link modal-button" data-href="pas-new">
                            <p>Permohonan Pembuatan Paspor Baru</p>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="button btn-link modal-button" data-href="pas-expired">
                            <p>Permohona Pembuatan Paspor Habis Masa Belakunya</p>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="button btn-link modal-button" data-href="pas-lost">
                            <p>Permohona Pembuatan Paspor Hilang</p>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="button btn-link modal-button" data-href="pas-broke">
                            <p>Permohona Pembuatan Paspor Rusak</p>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
            
                <!-- MODAL PAS BARU -->
                <div id="modal-pas-new" class="modal-dialog">
                  <div class="overlay__modal-full modal-full with-btn-close">
                    <div class="modal__container">
                      <div class="header transparent">
                        <h2 class="title">Alur Permohonan Pembuatan Paspor Baru</h2>
                        <div class="with-btn-close"></div>
                      </div>
                      <div class="body">
                        Persyaratan
                      </div>
                    </div>
                  </div>
                </div>
            
                <!-- MODAL PAS BARU -->
                <div id="modal-pas-expired" class="modal-dialog">
                  <div class="overlay__modal-full modal-full with-btn-close">
                    <div class="modal__container">
                      <div class="header transparent">
                        <h2 class="title">Alur Permohonan Pembuatan Paspor Habis Masa Berlaku</h2>
                        <div class="with-btn-close"></div>
                      </div>
                      <div class="body">
                        Persyaratan
                      </div>
                    </div>
                  </div>
                </div>

                <!-- MODAL PAS BARU -->
                <div id="modal-pas-lost" class="modal-dialog">
                  <div class="overlay__modal-full modal-full with-btn-close">
                    <div class="modal__container">
                      <div class="header transparent">
                        <h2 class="title">Alur Permohonan Pembuatan Paspor Hilang</h2>
                        <div class="with-btn-close"></div>
                      </div>
                      <div class="body">
                        Persyaratan
                      </div>
                    </div>
                  </div>
                </div>

                <!-- MODAL PAS BARU -->
                <div id="modal-pas-broke" class="modal-dialog">
                  <div class="overlay__modal-full modal-full with-btn-close">
                    <div class="modal__container">
                      <div class="header transparent">
                        <h2 class="title">Alur Permohonan Pembuatan Paspor Rusak</h2>
                        <div class="with-btn-close"></div>
                      </div>
                      <div class="body">
                        Persyaratan
                      </div>
                    </div>
                  </div>
                </div>
            
                <div class="float-menu">
                  <a href="wni-menu" class="nav-single to-back">
                    <i class="icon-back"></i>
                    <span class="text nav-back">Kembali</span>
                  </a>
                </div>
              </main>',
            ], [
              'title' => 'Panduan Aplikasi M-Paspor',
              'slug' => 'mpaspor',
              'language_id' => 1,
              'page' => '<main class="page-full-single">
                <div class="c-header">
                  <div class="office">
                    <img class="logo" src="../assets/vectors/logoditjenim.png" alt="logo">
                  </div>
                  <div class="title">
                    <h2>Langkah Penggunaan Aplikasi M-Paspor</h2>
                  </div>
                </div>
            
                <div id="wni-mpas">
                  <div class="container bg-overlay">
                    <div class="content-box">
            
                      <div class="box">
                        <!-- STEPS -->
                        <table id="mpas-steps">
                          <tr>
                            <td>
                              <div>
                                <h3>Intalasi Aplikasi</h3>
                                <p>Instal aplikasi pada perangkat anda melalui Playstore untuk pengguna Android atau AppStore untuk pengguna IOS<p>
                              </div>
                            </td>
                            <td><img src="../assets/vectors/mpas_steps0.png"></td>
                          </tr>
                          <tr>
                            <td>
                              <div>
                                <h3>Pembuatan Akun</h3>
                                <p>Pemohon yang belum memiliki akun dapat membuat akun baru dengan memilih <strong>Daftar Akun</strong> kemudian mengisi data diri pada halaman Pendaftaran Akun. Aktivasi akun akan terhubung dengan email yang didaftarkan. Klik <strong>Aktivasi Akun Anda</strong> untuk melanjutkan. Selanjutnya, masuk ke aplikasi M-Paspor dengan megisikan alamat email dan sandi yang telah didaftarkan lalu klik <strong>Masuk</strong></p>
                              </div>
                            </td>
                            <td><img src="../assets/vectors/mpas_steps1.png"></td>
                          </tr>
                          <tr>
                            <td>
                              <div>
                                <h3>Pengajuan Permohonan Paspor</h3>
                                <p>Pilih <strong>Pengajuan Permohonan</strong>, kemudian <strong>Permohonan Paspor Reguler</strong>, Klik <strong>Lanjutkan</strong>. Pemohon harus mengisi data dengan benar. Pengisian data yang tidak benar mengakibatkan permohonan paspor anda ditolak dan pembayaran tidak dapat dikembalikan</p>
                              </div>
                            </td>
                            <td><img src="../assets/vectors/mpas_steps0.png"></td>
                          </tr>
                          <tr>
                            <td>
                              <div>
                                <h3>Pemilihan Kantor Imigrasi Terdekat</h3>
                                <p></p>
                              </div>
                            </td>
                            <td><img src="../assets/vectors/mpas_steps0.png"></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                    <div class="phone-skin-box">
                      <div class="content-img">
                        <img src="../assets/vectors/mpas_steps0.png">
                      </div>
                      <img src="/assets/vectors/phone-skin.svg">
                    </div>
                  </div>
                </div>
            
                <div class="float-menu">
                  <a href="wni-menu" class="nav-single to-back">
                    <i class="icon-back"></i>
                    <span class="text nav-back">Kembali</span>
                  </a>
                </div>
              </main>',
            ], [
              'title' => 'Definisi Warga Negara Asing (WNA)',
              'slug' => 'wna-definition',
              'language_id' => 1,
              'page' => '<main class="page-full-single">
                <div class="c-header">
                  <div class="office">
                    <img class="logo" src="../assets/vectors/logoditjenim.png" alt="logo">
                  </div>
                  <div class="title">
                    <h2>Definisi Izin Tinggal Bagi Warga Negara Asing ( WNA )</h2>
                  </div>
                </div>
                <div id="wna-definitions">
                  <div class="container">
                    <div class="definition">
                      <p>
                        <strong>Izin Tinggal</strong> adalah izin yang diberikan kepada Orang Asing oleh Pejabat Imigrasi atau
                        pejabat dinas luar
                        negeri untuk berada di Wilayah Indonesia.
                      </p>
                    </div>
                    <div class="permited">
                      <div class="title">Pemberian Izin Tinggal Bagi WNA</div>
            
                      <div class="kind">
                        <div class="modal-button" data-href="itk">Izin Tinggal Kunjungan (ITK) / Visa On Arrival (VOA)</div>
                        <div class="modal-button" data-href="itas">Izin Tinggal Terbatas (ITAS)</div>
                        <div class="modal-button" data-href="itap">Izin Tinggal Tetap (ITAP)</div>
                      </div>
                    </div>
                  </div>
                </div>
            
                <!-- MODAL -->
                <div id="modal-itk" class="modal-dialog">
                  <div class="overlay__modal modal-center-margin-40px">
                    <div class="modal__container">
                      <div class="header">
                        <div class="with-btn-close btn-float btn"></div>
                      </div>
                      <div class="body">
                        <!-- Content -->
                        <div class="content modal-content-itk">
                          <h3 class="title">Izin Tinggal kunjungan (ITK) diberikan kepada : </h3>
            
                          <ol>
                            <li>Orang Asing yang masuk Wilayah Indonesia dengan Visa kunjungan; atau</li>
                            <li>Anak yang baru lahir di Wilayah Indonesia dan pada saat lahir ayah dan/atau ibunya pemegang Izin
                              Tinggal kunjungan</li>
                          </ol>
            
                        </div>
            
                      </div>
                    </div>
                  </div>
                </div>
            
                <div id="modal-itas" class="modal-dialog">
                  <div class="overlay__modal modal-center-margin-40px">
                    <div class="modal__container">
                      <div class="header">
                        <div class="with-btn-close btn-float btn"></div>
                      </div>
                      <div class="body">
                        <!-- Content -->
                        <div class="content modal-content-itk">
                          <h3 class="title">Izin Tinggal terbatas (ITAS) diberikan kepada : </h3>
            
                          <ol>
                            <li>Orang Asing yang masuk Wilayah Indonesia dengan Visa tinggal terbatas;</li>
                            <li>Anak yang pada saat lahir di Wilayah Indonesia ayah dan/atau ibunya pemegang Izin Tinggal terbatas;
                            </li>
                            <li>Orang Asing yang diberikan alih status dari Izin Tinggal kunjungan;</li>
                            <li>Nakhoda, awak kapal, atau tenaga ahli asing di atas kapal laut, alat apung, atau instalasi yang
                              beroperasi di wilayah perairan dan wilayah yurisdiksi Indonesia sesuai dengan ketentuan peraturan
                              perundangundangan;</li>
                            <li>Orang Asing yang kawin secara sah dengan warga negara Indonesia; atau</li>
                            <li>Anak dari Orang Asing yang kawin secara sah dengan warga negara Indonesia</li>
            
                          </ol>
            
                        </div>
            
                      </div>
                    </div>
                  </div>
                </div>
            
                <div id="modal-itap" class="modal-dialog">
                  <div class="overlay__modal modal-center-margin-40px">
                    <div class="modal__container">
                      <div class="header">
                        <div class="with-btn-close btn-float btn"></div>
                      </div>
                      <div class="body">
                        <!-- Content -->
                        <div class="content modal-content-itk">
                          <h3 class="title">Izin Tinggal Tetap (ITAP) dapat diberikan kepada :</h3>
            
                          <ol>
                            <li>Orang Asing pemegang Izin Tinggal terbatas sebagai rohaniwan, pekerja, investor, dan lanjut usia;
                            </li>
                            <li>Keluarga karena perkawinan campuran;</li>
                            <li>Suami, istri, dan/atau anak dari Orang Asing pemegang Izin Tinggal Tetap; dan</li>
                            <li>Orang Asing eks warga negara Indonesia dan eks subjek anak berkewarganegaraan ganda Republik
                              Indonesia.</li>
                          </ol>
            
                        </div>
            
                      </div>
                    </div>
                  </div>
                </div>
            
                <div class="float-menu">
                  <a href="wna-menu" class="nav-single to-back">
                    <i class="icon-back"></i>
                    <span class="text nav-back">Kembali</span>
                  </a>
                </div>
                
              </main>',
            ], [
              'title' => 'Persyaratan Permohonan Izin Tinggal',
              'slug' => 'wna-requirement',
              'language_id' => 1,
              'page' => '<main class="page-full-single">
                <div class="c-header">
                  <div class="office">
                    <img class="logo" src="../assets/vectors/logoditjenim.png" alt="logo">
                  </div>
                  <div class="title">
                    <h2>Persyaratan Izin Tinggal Bagi Warga Negara Asing</h2>
                  </div>
                </div>
                <div id="wna-requirements">
                  <div class="container-center">
            
                    <table id="t-buttons" class="options">
                      <tbody>
                        <tr>
                          <td>
                            <div class="btn-link modal-button" data-href="voa">
                              <p>
                                Persyaratan Perpanjangan Visa On Arrival (VOA)
                              </p>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="btn-link modal-button" data-href="itk">
                              <p>
                                Persyaratan Perpanjangan Izin Tinggal Kunjungan (ITK)
                              </p>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="btn-link modal-button" data-href="itas">
                              <p>
                                Persyaratan Izin Tinggal Terbatas (ITAS)
                              </p>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="btn-link modal-button" data-href="itap">
                              <p>
                                Persyaratan Izin Tinggal Tetap (ITAP)
                              </p>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
            
                <!-- MODAL -->
                <div id="modal-voa" class="modal-dialog">
                  <div class="overlay__modal modal-center-margin-40px">
                    <div class="modal__container">
                      <div class="header">
                        <div class="with-btn-close btn-float btn"></div>
                      </div>
                      <div class="body">
                        <!-- Content -->
                        <div class="content modal-content-itk">
                          <h3 class="title">Persyaratan Perpanjangan VOA : </h3>
            
                          <ol>
                            <li>Paspor kebangsaan atau dokumen perjalanan yang sah dan masih berlaku;</li>
                            <li>Tiket untuk kembali ke negara asal atau meneruskan ke negara lain (return ticket)/ ED Card dan
                              Voucher VOA; da</li>
                            <li>Surat kuasa bermaterai cukup dalam hal pengurusan melalui kuasa.</li>
                          </ol>
            
                        </div>
            
                      </div>
                    </div>
                  </div>
                </div>
            
                <div id="modal-itk" class="modal-dialog">
                  <div class="overlay__modal modal-center-margin-40px">
                    <div class="modal__container">
                      <div class="header">
                        <div class="with-btn-close btn-float btn"></div>
                      </div>
                      <div class="body">
                        <!-- Content -->
                        <div class="content modal-content-itk">
                          <h3 class="title">Peryaratan Perpanjangan ITK : </h3>
            
                          <ol>
                            <li>Dapat diperpanjang paling banyak 4 (empat) kali dan setiap kali perpanjangan untuk jangka waktu
                              paling lama 30 (tiga puluh) hari;</li>
                            <li>Dapat di alih status ke ITAS setelah tiba di Indonesia, adapun syaratnya:</li>
                            <ul>
                              <li>Surat penjamin dari penjamin pada saat mengajukan permohonan visa, kecuali bagi permohonan
                                terhadap anak yang lahir di wilayah Indonesia;</li>
                              <li>Paspor kebangsaan atau dokumen perjalanan yang sah dan masih berlaku;</li>
                              <li>Tiket untuk kembali ke Negara asal atau meneruskan ke negara lain;</li>
                              <li>Surat kuasa bermaterai cukup dalam hal pengurusan melalui kuasa</li>
                            </ul>
                          </ol>
            
                        </div>
            
                      </div>
                    </div>
                  </div>
                </div>
            
                <div id="modal-itas" class="modal-dialog">
                  <div class="overlay__modal modal-center-margin-40px">
                    <div class="modal__container">
                      <div class="header">
                        <div class="with-btn-close btn-float btn"></div>
                      </div>
                      <div class="body">
                        <!-- Content -->
                        <div class="content modal-content-itk">
                          <h3 class="title">Persyaratan Permohonan ITAS :</h3>
            
                          <div class="custom-select">
                            <select>
                              <option value="0">Orang Asing yang bekerja sebagai penanaman modal</option>
                              <option value="1">Orang Asing yang bekerja sebagai tenaga ahli</option>
                              <option value="2">Orang Asing yang bekerja sebagai rohaniawan</option>
                              <option value="3">Orang Asing yang mengikuti pendidikan dan pelatihan</option>
                              <option value="4">Orang Asing yang melakukan perkawinan campuran dan menggabungkan diri dengan suami
                                atau istri Warga Negara Indonesia</option>
                              <option value="5">Orang Asing yang menggabungkan diri dengan suami atau istri pemegang Izin Tinggal
                                Terbatas</option>
                              <option value="6">Anak berkewarganegaraan asing yang menggabungkan diri dengan orang tua yang
                                mempunyai hubungan hukum kekeluargaan dengan orang tua warga Negara Indonesia</option>
                              <option value="7">Anak yang belum berusia 18 (delapan belas) tahun dan belum kawin yang menggabungkan
                                diri dengan orang tua pemegang Izin Tinggal Terbatas/option>
                              <option value="8">Warga Negara Indonesia dalam rangka memperoleh kembali Kewarganegaraan Republik
                                Indonesia berdasarkan ketentuan peraturan perundang-undangan</option>
                              <option value="9"> eks Warga Negara Indonesia bukan dalam rangka memperoleh kembali Kewarganegaraan
                                Indonesia, permohonan diajukan oleh penjamin dengan melampirkan juga dokumen resmi yang dikeluarkan
                                oleh Instansi Pemerintah Republik Indonesia atau oleh Lembaga yang diakui oleh Pemerintah Republik
                                Indonesia yang sah yang dapat membuktikan bahwa yang bersangkutan adalah eks Warga Negara Indonesia
                              </option>
                            </select>
                          </div>
            
                        </div>
            
                      </div>
                    </div>
                  </div>
                </div>
            
                <div id="modal-itap" class="modal-dialog">
                  <div class="overlay__modal modal-center-margin-40px">
                    <div class="modal__container">
                      <div class="header">
                        <div class="with-btn-close btn-float btn"></div>
                      </div>
                      <div class="body">
                        <!-- Content -->
                        <div class="content modal-content-itk">
                          <h3 class="title">Persyaratan Permohonan ITAS :</h3>
            
                          <div class="custom-select">
                            <select>
                              <option value="0">Orang Asing yang bekerja sebagai penanaman modal</option>
                              <option value="1">Orang Asing yang bekerja sebagai tenaga ahli</option>
                              <option value="2">Orang Asing yang bekerja sebagai rohaniawan</option>
                              <option value="3">Orang Asing yang mengikuti pendidikan dan pelatihan</option>
                              <option value="4">Orang Asing yang melakukan perkawinan campuran dan menggabungkan diri dengan suami
                                atau istri Warga Negara Indonesia</option>
                              <option value="5">Orang Asing yang menggabungkan diri dengan suami atau istri pemegang Izin Tinggal
                                Terbatas</option>
                              <option value="6">Anak berkewarganegaraan asing yang menggabungkan diri dengan orang tua yang
                                mempunyai hubungan hukum kekeluargaan dengan orang tua warga Negara Indonesia</option>
                              <option value="7">Anak yang belum berusia 18 (delapan belas) tahun dan belum kawin yang menggabungkan
                                diri dengan orang tua pemegang Izin Tinggal Terbatas/option>
                              <option value="8">Warga Negara Indonesia dalam rangka memperoleh kembali Kewarganegaraan Republik
                                Indonesia berdasarkan ketentuan peraturan perundang-undangan</option>
                              <option value="9"> eks Warga Negara Indonesia bukan dalam rangka memperoleh kembali Kewarganegaraan
                                Indonesia, permohonan diajukan oleh penjamin dengan melampirkan juga dokumen resmi yang dikeluarkan
                                oleh Instansi Pemerintah Republik Indonesia atau oleh Lembaga yang diakui oleh Pemerintah Republik
                                Indonesia yang sah yang dapat membuktikan bahwa yang bersangkutan adalah eks Warga Negara Indonesia
                              </option>
                            </select>
                          </div>
            
                        </div>
            
                      </div>
                    </div>
                  </div>
                </div>
            
                <div class="float-menu">
                  <a href="wna-menu" class="nav-single to-back">
                    <i class="icon-back"></i>
                    <span class="text nav-back">Kembali</span>
                  </a>
                </div>
              </main>',
            ], [
              'title' => 'Tarif Izin Tinggal',
              'slug' => 'wna-price',
              'language_id' => 1,
              'page' => '<main class="page-full-single">
                <div class="c-header">
                  <div class="office">
                    <img class="logo" src="../assets/vectors/logoditjenim.png" alt="logo">
                  </div>
                  <div class="title">
                    <h2>Tarif Layanan Keimigrasian Bagi WNA</h2>
                  </div>
                </div>
                <div id="wna-menu">
                  <div class="overlay"></div>
                  <div class="menus">
            
            
                    <a href="wna-tarif-visa" class="menu">
                      <div class="icon-box">
                        <i class="icon-tarif-visa"></i>
                      </div>
                      <div class="text">V I S A</div>
                    </a>
            
                    <a href="wna-tarif-imigrasi" class="menu">
                      <div class="icon-box">
                        <i class="icon-tarif-imigrasi"></i>
                      </div>
                      <div class="text">IZIN IMIGRASI</div>
                    </a>
                    
                    <a href="wna-tarif-visa" class="menu">
                      <div class="icon-box">
                        <i class="icon-tarif-lainnya"></i>
                      </div>
                      <div class="text">TARIF LAINNYA</div>
                    </a>
            
                  </div>
                </div>
            
                <div class="float-menu">
                  <a href="wna-menu" class="nav-single to-back">
                    <i class="icon-back"></i>
                    <span class="text nav-back">Kembali</span>
                  </a>
                </div>
              </main>',
            ], [
              'title' => 'Tarif Visa',
              'slug' => 'wna-tarif-visa',
              'language_id' => 1,
              'page' => '<main class="page-full-single">
                <div class="c-header">
                  <div class="office">
                    <img class="logo" src="../assets/vectors/logoditjenim.png" alt="logo">
                  </div>
                  <div class="title">
                    <h2>Tarif Layanan Visa</h2>
                  </div>
                </div>
            
                <div id="wni-prices">
                  <div class="container-center">
            
                    <table id="t-buttons" class="options">
                      <tbody>
                        <tr>
                          <td>
                            <div class="button btn-link modal-button" data-href="1x">
                              <span class="text">Visa Kunjungan Sekali Perjalanan</span>
                              <span class="price">
                                <span class="unit">USD.</span>
                                <span class="value">50</span>
                              </span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="button btn-link modal-button" data-href="xx">
                              <span class="text">Visa Kunjungan Beberapa Kali Perjalanan Per Tahun</span>
                              <span class="price">
                                <span class="unit">USD.</span>
                                <span class="value">110</span>
                              </span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="button btn-link modal-button" data-href="arrived">
                              <span class="text">Visa Kunjungan Saat Kedatangan</span>
                              <span class="price">
                                <span class="unit">Rp.</span>
                                <span class="value">500.000</span>
                              </span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="button btn-link modal-button" data-href="vitas">
                              <span class="text">Visa Tinggal Terbatas</span>
                              <span class="price">
                                <span class="unit">USD.</span>
                                <span class="value">150</span>
                              </span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="button btn-link modal-button" data-href="vitas-datang">
                              <span class="text">Visa Tinggal Terbatas saat Kedatangan </span>
                              <span class="price">
                                <span class="unit">Rp.</span>
                                <span class="value">700.000</span>
                              </span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="button btn-link modal-button" data-href="persetujuan">
                              <span class="text">Persetujuan Visa Direktur Jenderal Imigrasi</span>
                              <span class="price">
                                <span class="unit">Rp.</span>
                                <span class="value">200.000</span>
                              </span>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
            
                  </div>
                </div>
            
                <!-- MODAL-->
                <div id="modal-1x" class="modal-dialog">
                  <div class="overlay__modal modal-center-75">
                    <div class="modal__container">
                      <div class="header">
                        <div class="with-btn-close btn-float btn"></div>
                      </div>
                      <div class="body">
                        <!-- Content -->
                        <div class="content">
            
                          <div class="list-items">
                            <div class="item">
                              <div class="label">Jenis</div>
                              <div class="value"><strong>Visa Kunjungan Sekali Perjalanan</strong></div>
                            </div>
                            <div class="item">
                              <div class="label">Satuan Ukur</div>
                              <div class="value">Per Sekali Permohonan</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif Dalam</div>
                              <div class="value">US$ ( Dollar US )</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif</div>
                              <div class="value">50</div>
                            </div>
                            <div class="item">
                              <div class="label">Deskripsi</div>
                              <div class="value">
                                <p>
                                  Visa Kunjungan Satu Kali perjalanan untuk 60 hari dan 180 hari dapat diajukan melalui aplikasi
                                  Persetujuan Visa Online
                                </p>
                              </div>
                            </div>
                          </div>
            
                        </div>
                        <!-- NOtes -->
                        <div class="notes">
                          <p class="text-italic">
                            Berdasarkan Peraturan Pemerintah No. 28 Tahun 2019 tentang Jenis dan Tarif atas Jenis Penerimaan Negara
                            Bukan Pajak (PNBP) yang berlaku pada Kementerian Hukum dan HAM Republik Indonesia Tanggal 18 April 2019
                            (berlaku mulai 3 Mei 2019)
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            
                <div id="modal-xx" class="modal-dialog">
                  <div class="overlay__modal modal-center-75">
                    <div class="modal__container">
                      <div class="header">
                        <div class="with-btn-close btn-float btn"></div>
                      </div>
                      <div class="body">
                        <!-- Content -->
                        <div class="content">
            
                          <div class="list-items">
                            <div class="item">
                              <div class="label">Jenis</div>
                              <div class="value"><strong>Visa Kunjungan Beberapa Kali Kunjungan</strong></div>
                            </div>
                            <div class="item">
                              <div class="label">Satuan</div>
                              <div class="value">Per Sekali Permohanan</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif Dalam</div>
                              <div class="value">US$ ( Dollar US )</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif</div>
                              <div class="value">150 / Tahun</div>
                            </div>
                            <div class="item">
                              <div class="label">Deskripsi</div>
                              <div class="value">
                                <p>
                                  Visa Kunjungan Beberapa Kali Perjalanan diberikan kepada Orang Asing dengan masa berlaku visa
                                  paling lama 5 (lima) tahun. Visa ini dapat digunakan untuk tinggal di Wilayah Indonesia paling
                                  lama 60 hari (dua bulan). Khusus untuk kegiatan pra-investasi dapat diberikan 180 hari (enam
                                  bulan) sejak tanggal masuk.
                                </p>
                              </div>
                            </div>
                          </div>
            
                        </div>
                        <!-- NOtes -->
                        <div class="notes">
                          <p class="text-italic">
                            Berdasarkan Peraturan Pemerintah No. 28 Tahun 2019 tentang Jenis dan Tarif atas Jenis Penerimaan Negara
                            Bukan Pajak (PNBP) yang berlaku pada Kementerian Hukum dan HAM Republik Indonesia Tanggal 18 April 2019
                            (berlaku mulai 3 Mei 2019)
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            
                <div id="modal-arrived" class="modal-dialog">
                  <div class="overlay__modal modal-center-75">
                    <div class="modal__container">
                      <div class="header">
                        <div class="with-btn-close btn-float btn"></div>
                      </div>
                      <div class="body">
                        <!-- Content -->
                        <div class="content">
            
                          <div class="list-items">
                            <div class="item">
                              <div class="label">Jenis</div>
                              <div class="value"><strong>Visa Kunjungan Saat Kedatangan</strong></div>
                            </div>
                            <div class="item">
                              <div class="label">Satuan</div>
                              <div class="value">Per Sekali Permohonan</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif Dalam</div>
                              <div class="value">Rp ( Rupiah )</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif</div>
                              <div class="value">500.000</div>
                            </div>
                            <div class="item">
                              <div class="label">Deskripsi</div>
                              <div class="value">
                                <p>
                                  Permohonan Visa Kunjungan Saat Kedatangan (VoA) diajukan oleh Orang Asing saat kedatangan di
                                  Tempat Pemeriksaan Imigrasi (TPI) tertentu.
                                </p>
                              </div>
                            </div>
                          </div>
            
                        </div>
                        <!-- NOtes -->
                        <div class="notes">
                          <p class="text-italic">
                            Berdasarkan Peraturan Pemerintah No. 28 Tahun 2019 tentang Jenis dan Tarif atas Jenis Penerimaan Negara
                            Bukan Pajak (PNBP) yang berlaku pada Kementerian Hukum dan HAM Republik Indonesia Tanggal 18 April 2019
                            (berlaku mulai 3 Mei 2019)
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            
                <div id="modal-vitas" class="modal-dialog">
                  <div class="overlay__modal modal-center-75">
                    <div class="modal__container">
                      <div class="header">
                        <div class="with-btn-close btn-float btn"></div>
                      </div>
                      <div class="body">
                        <!-- Content -->
                        <div class="content">
            
                          <div class="list-items">
                            <div class="item">
                              <div class="label">Jenis</div>
                              <div class="value"><strong>Visa Tinggal Terbatas</strong></div>
                            </div>
                            <div class="item">
                              <div class="label">Satuan</div>
                              <div class="value">Per Sekali Permohanan</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif Dalam</div>
                              <div class="value">US$ (Dollar US)</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif</div>
                              <div class="value">150</div>
                            </div>
                            <div class="item">
                              <div class="label">Deskripsi</div>
                              <div class="value">
                                <p>
                                  Visa tinggal terbatas diberikan kepada Orang Asing yang akan masuk dan tinggal di Wilayah
                                  Indonesia dalam waktu tertentu. Bagi orang asing pemegang visa tinggal terbatas dalam rangka
                                  bekerja, izin tinggal dan izin masuk kembali diberikan pada saat kedatangan di Bandara/Pelabuhan
                                  tertentu.
                                </p>
                              </div>
                            </div>
                          </div>
            
                        </div>
                        <!-- NOtes -->
                        <div class="notes">
                          <p class="text-italic">
                            Berdasarkan Peraturan Pemerintah No. 28 Tahun 2019 tentang Jenis dan Tarif atas Jenis Penerimaan Negara
                            Bukan Pajak (PNBP) yang berlaku pada Kementerian Hukum dan HAM Republik Indonesia Tanggal 18 April 2019
                            (berlaku mulai 3 Mei 2019)
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            
                <div id="modal-vitas-datang" class="modal-dialog">
                  <div class="overlay__modal modal-center-75">
                    <div class="modal__container">
                      <div class="header">
                        <div class="with-btn-close btn-float btn"></div>
                      </div>
                      <div class="body">
                        <!-- Content -->
                        <div class="content">
            
                          <div class="list-items">
                            <div class="item">
                              <div class="label">Jenis</div>
                              <div class="value"><strong>Visa Tinggal Terbatas Saat Kedatangan</strong></div>
                            </div>
                            <div class="item">
                              <div class="label">Satuan</div>
                              <div class="value">Per Sekali Permohanan</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif Dalam</div>
                              <div class="value">Rp ( Rupiah )</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif</div>
                              <div class="value">700.000</div>
                            </div>
                            <div class="item">
                              <div class="label">Deskripsi</div>
                              <div class="value">
                                <p>
                                  Visa Kunjungan Saat Kedatangan diberikan izin untuk tinggal di Wilayah Indonesia selama 30 (tiga
                                  puluh) hari dan dapat diperpanjang.
                                </p>
                              </div>
                            </div>
                          </div>
            
                        </div>
                        <!-- NOtes -->
                        <div class="notes">
                          <p class="text-italic">
                            Berdasarkan Peraturan Pemerintah No. 28 Tahun 2019 tentang Jenis dan Tarif atas Jenis Penerimaan Negara
                            Bukan Pajak (PNBP) yang berlaku pada Kementerian Hukum dan HAM Republik Indonesia Tanggal 18 April 2019
                            (berlaku mulai 3 Mei 2019)
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            
                <div id="modal-persetujuan" class="modal-dialog">
                  <div class="overlay__modal modal-center-75">
                    <div class="modal__container">
                      <div class="header">
                        <div class="with-btn-close btn-float btn"></div>
                      </div>
                      <div class="body">
                        <!-- Content -->
                        <div class="content">
            
                          <div class="list-items">
                            <div class="item">
                              <div class="label">Jenis</div>
                              <div class="value"><strong>Persetujuan Visa Direktur Jenderal Imigrasi</strong></div>
                            </div>
                            <div class="item">
                              <div class="label">Satuan</div>
                              <div class="value">Per Sekali Permohanan</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif Dalam</div>
                              <div class="value">Rp ( Rupiah )</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif</div>
                              <div class="value">200.000</div>
                            </div>
                            <div class="item">
                              <div class="label">Deskripsi</div>
                              <div class="value">
                                <p>
                                  Aplikasi ini akan membantu Anda untuk mendapatkan Surat Persetujuan Visa dimana surat tersebut
                                  akan menjadi dasar perwakilan Republik Indonesia di luar negeri
                                </p>
                              </div>
                            </div>
                          </div>
            
                        </div>
                        <!-- NOtes -->
                        <div class="notes">
                          <p class="text-italic">
                            Berdasarkan Peraturan Pemerintah No. 28 Tahun 2019 tentang Jenis dan Tarif atas Jenis Penerimaan Negara
                            Bukan Pajak (PNBP) yang berlaku pada Kementerian Hukum dan HAM Republik Indonesia Tanggal 18 April 2019
                            (berlaku mulai 3 Mei 2019)
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            
                <div class="float-menu">
                  <a href="wna-price" class="nav-single to-back">
                    <i class="icon-back"></i>
                    <span class="text nav-back">Kembali</span>
                  </a>
                </div>
              </main>',
            ], [
              'title' => 'Tarif Izin Tinggal',
              'slug' => 'wna-tarif-imigrasi',
              'language_id' => 1,
              'page' => '<main class="page-full-single">
                <div class="c-header">
                  <div class="office">
                    <img class="logo" src="../assets/vectors/logoditjenim.png" alt="logo">
                  </div>
                  <div class="title">
                    <h2>Tarif Layanan Keimigrasian</h2>
                  </div>
                </div>
            
                <div id="wni-prices">
                  <div class="container-center">
            
                    <table id="t-buttons" class="options">
                      <tbody>
                        <tr>
                          <td>
                            <div class="button btn-link modal-button" data-href="itk-30">
                              <span class="text">Permohonan Izin Kunjungan Berkalu Selama 30 Hari</span>
                              <span class="price">
                                <span class="unit">Rp.</span>
                                <span class="value">500.000</span>
                              </span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="button btn-link modal-button" data-href="itk-30x">
                              <span class="text">Perpanjangan Izin Kunjungan Berkalu Selama 30 Hari</span>
                              <span class="price">
                                <span class="unit">RP.</span>
                                <span class="value">500.000</span>
                              </span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="button btn-link modal-button" data-href="itk-60">
                              <span class="text">Permohonan Izin Kunjungan Berkalu Selama 60 Hari</span>
                              <span class="price">
                                <span class="unit">Rp.</span>
                                <span class="value">750.000</span>
                              </span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="button btn-link modal-button" data-href="itas-kedatangan">
                              <span class="text">Izin Tinggal Terbatas Saat Kedatangan</span>
                              <span class="price">
                                <span class="unit">Rp.</span>
                                <span class="value">750.000</span>
                              </span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="button btn-link modal-button" data-href="itas-6">
                              <span class="text">Izin Tinggal Terbatas Masa Berlaku 6 (Enam) Bulan</span>
                              <span class="price">
                                <span class="unit">Rp.</span>
                                <span class="value">1.000.000</span>
                              </span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="button btn-link modal-button" data-href="itas-12">
                              <span class="text">Izin Tinggal Terbatas Masa Berlaku 1 (Satu) Tahun</span>
                              <span class="price">
                                <span class="unit">Rp.</span>
                                <span class="value">1.500.000</span>
                              </span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="button btn-link modal-button" data-href="itas-24">
                              <span class="text">Izin Tinggal Terbatas Masa Berlaku 2 (Dua) Tahun</span>
                              <span class="price">
                                <span class="unit">Rp.</span>
                                <span class="value">2.000.000</span>
                              </span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="button btn-link modal-button" data-href="itas-60">
                              <span class="text">Izin Tinggal Khusus masa belaku paling lama 5 (Lima) Tahun khusus pada Kawasan
                                Ekonomi Khusus (KEK)</span>
                              <span class="price">
                                <span class="unit">Rp.</span>
                                <span class="value">5.000.000</span>
                              </span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="button btn-link modal-button" data-href="itas-persetujuan-pekerja-perairan">
                              <span class="text">Persetujuan Izin Tinggal Terbatas untuk pekerja di perairan Indonesia</span>
                              <span class="price">
                                <span class="unit">Rp.</span>
                                <span class="value">1.000.000</span>
                              </span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="button btn-link modal-button" data-href="itas-teraan-pekerja-perairan">
                              <span class="text">Teraan Izin Tinggal Terbatas untuk pekerja di perairan Indonesia</span>
                              <span class="price">
                                <span class="unit">Rp.</span>
                                <span class="value">300.000</span>
                              </span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="button btn-link modal-button" data-href="itap-5th">
                              <span class="text">Pemberian Izin Tinggal Tetap masa berlaku 5 (Lima) Tahun</span>
                              <span class="price">
                                <span class="unit">Rp.</span>
                                <span class="value">5.000.000</span>
                              </span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="button btn-link modal-button" data-href="itap-5ths">
                              <span class="text">Perpanjangan Izin Tinggal Tetap masa berlaku 5 (Lima) Tahun</span>
                              <span class="price">
                                <span class="unit">Rp.</span>
                                <span class="value">5.000.000</span>
                              </span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="button btn-link modal-button" data-href="itap-unlimited">
                              <span class="text">Perpanjangan Izin Tinggal Tetap untuk jangka waktu tidak terbatas</span>
                              <span class="price">
                                <span class="unit">Rp.</span>
                                <span class="value">10.200.000</span>
                              </span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="button btn-link modal-button" data-href="imk-6">
                              <span class="text">Izin Masuk Kembali masa berlaku paling lama 6 bulan</span>
                              <span class="price">
                                <span class="unit">Rp.</span>
                                <span class="value">600.000</span>
                              </span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="button btn-link modal-button" data-href="imk-12">
                              <span class="text">Izin Masuk Kembali masa berlaku paling lama 1 Tahun</span>
                              <span class="price">
                                <span class="unit">Rp.</span>
                                <span class="value">1.000.000</span>
                              </span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="button btn-link modal-button" data-href="imk-24">
                              <span class="text">Izin Masuk Kembali masa berlaku paling lama 2 Tahun</span>
                              <span class="price">
                                <span class="unit">Rp.</span>
                                <span class="value">1.750.000</span>
                              </span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="button btn-link modal-button" data-href="imk-60">
                              <span class="text">Izin Masuk Kembali masa berlaku paling lama 5 Tahun khusus pada Kawasan Ekonomi
                                Khusus()</span>
                              <span class="price">
                                <span class="unit">Rp.</span>
                                <span class="value">3.250.000</span>
                              </span>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
            
                  </div>
                </div>
            
                <!-- MODAL-->
                <div id="modal-itk-30" class="modal-dialog">
                  <div class="overlay__modal modal-center-75">
                    <div class="modal__container">
                      <div class="header">
                        <div class="with-btn-close btn-float btn"></div>
                      </div>
                      <div class="body">
                        <!-- Content -->
                        <div class="content">
            
                          <div class="list-items">
                            <div class="item">
                              <div class="label">Jenis</div>
                              <div class="value"><strong>Pemberian Izin Tinggal Kunjungan Masa Berlaku 30 Hari</strong></div>
                            </div>
                            <div class="item">
                              <div class="label">Satuan Ukur</div>
                              <div class="value">Per Sekali Permohonan</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif Dalam</div>
                              <div class="value">Rp ( Rupiah )</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif</div>
                              <div class="value">500.000</div>
                            </div>
                            <div class="item">
                              <div class="label">Deskripsi</div>
                              <div class="value">
                                <p>
                                  Pemberian Izin Tinggal Kunjungan dengan Masa Berlaku 30 Hari
                                </p>
                              </div>
                            </div>
                          </div>
            
                        </div>
                        <!-- NOtes -->
                        <div class="notes">
                          <p class="text-italic">
                            Berdasarkan Peraturan Pemerintah No. 28 Tahun 2019 tentang Jenis dan Tarif atas Jenis Penerimaan Negara
                            Bukan Pajak (PNBP) yang berlaku pada Kementerian Hukum dan HAM Republik Indonesia Tanggal 18 April 2019
                            (berlaku mulai 3 Mei 2019)
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            
                <div id="modal-itk-30x" class="modal-dialog">
                  <div class="overlay__modal modal-center-75">
                    <div class="modal__container">
                      <div class="header">
                        <div class="with-btn-close btn-float btn"></div>
                      </div>
                      <div class="body">
                        <!-- Content -->
                        <div class="content">
            
                          <div class="list-items">
                            <div class="item">
                              <div class="label">Jenis</div>
                              <div class="value"><strong>Perpanjangan Izin Tinggal Kunjungan Masa Berlaku 30 Hari</strong></div>
                            </div>
                            <div class="item">
                              <div class="label">Satuan Ukur</div>
                              <div class="value">Per Sekali Permohonan</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif Dalam</div>
                              <div class="value">Rp ( Rupiah )</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif</div>
                              <div class="value">500.000</div>
                            </div>
                            <div class="item">
                              <div class="label">Deskripsi</div>
                              <div class="value">
                                <p>
                                  Perpanjangan Izin Tinggal Kunjungan dengan Masa Berlaku 30 Hari
                                </p>
                              </div>
                            </div>
                          </div>
            
                        </div>
                        <!-- NOtes -->
                        <div class="notes">
                          <p class="text-italic">
                            Berdasarkan Peraturan Pemerintah No. 28 Tahun 2019 tentang Jenis dan Tarif atas Jenis Penerimaan Negara
                            Bukan Pajak (PNBP) yang berlaku pada Kementerian Hukum dan HAM Republik Indonesia Tanggal 18 April 2019
                            (berlaku mulai 3 Mei 2019)
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            
                <div id="modal-itk-60" class="modal-dialog">
                  <div class="overlay__modal modal-center-75">
                    <div class="modal__container">
                      <div class="header">
                        <div class="with-btn-close btn-float btn"></div>
                      </div>
                      <div class="body">
                        <!-- Content -->
                        <div class="content">
            
                          <div class="list-items">
                            <div class="item">
                              <div class="label">Jenis</div>
                              <div class="value"><strong>Perpanjangan Izin Tinggal Kunjungan Masa Berlaku 30 Hari</strong></div>
                            </div>
                            <div class="item">
                              <div class="label">Satuan Ukur</div>
                              <div class="value">Per Sekali Permohonan</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif Dalam</div>
                              <div class="value">Rp ( Rupiah )</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif</div>
                              <div class="value">750.000</div>
                            </div>
                            <div class="item">
                              <div class="label">Deskripsi</div>
                              <div class="value">
                                <p>
                                  Perpanjangan Izin Tinggal Kunjungan dengan Masa Berlaku 60 Hari
                                </p>
                              </div>
                            </div>
                          </div>
            
                        </div>
                        <!-- NOtes -->
                        <div class="notes">
                          <p class="text-italic">
                            Berdasarkan Peraturan Pemerintah No. 28 Tahun 2019 tentang Jenis dan Tarif atas Jenis Penerimaan Negara
                            Bukan Pajak (PNBP) yang berlaku pada Kementerian Hukum dan HAM Republik Indonesia Tanggal 18 April 2019
                            (berlaku mulai 3 Mei 2019)
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            
                <div id="modal-itas-kedatangan" class="modal-dialog">
                  <div class="overlay__modal modal-center-75">
                    <div class="modal__container">
                      <div class="header">
                        <div class="with-btn-close btn-float btn"></div>
                      </div>
                      <div class="body">
                        <!-- Content -->
                        <div class="content">
            
                          <div class="list-items">
                            <div class="item">
                              <div class="label">Jenis</div>
                              <div class="value"><strong>Permohonan Izin Tinggal Saat Kedatangan</strong></div>
                            </div>
                            <div class="item">
                              <div class="label">Satuan Ukur</div>
                              <div class="value">Per Sekali Permohonan</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif Dalam</div>
                              <div class="value">Rp ( Rupiah )</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif</div>
                              <div class="value">750.000</div>
                            </div>
                            <div class="item">
                              <div class="label">Deskripsi</div>
                              <div class="value">
                                <p>
                                  Permohonan Izin Tinggal Saat Kedatangan
                                </p>
                              </div>
                            </div>
                          </div>
            
                        </div>
                        <!-- NOtes -->
                        <div class="notes">
                          <p class="text-italic">
                            Berdasarkan Peraturan Pemerintah No. 28 Tahun 2019 tentang Jenis dan Tarif atas Jenis Penerimaan Negara
                            Bukan Pajak (PNBP) yang berlaku pada Kementerian Hukum dan HAM Republik Indonesia Tanggal 18 April 2019
                            (berlaku mulai 3 Mei 2019)
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            
                <div id="modal-itas-6" class="modal-dialog">
                  <div class="overlay__modal modal-center-75">
                    <div class="modal__container">
                      <div class="header">
                        <div class="with-btn-close btn-float btn"></div>
                      </div>
                      <div class="body">
                        <!-- Content -->
                        <div class="content">
            
                          <div class="list-items">
                            <div class="item">
                              <div class="label">Jenis</div>
                              <div class="value"><strong>Izin Tinggal Terbatas masa berlaku paling lama 6 bulan</strong></div>
                            </div>
                            <div class="item">
                              <div class="label">Satuan Ukur</div>
                              <div class="value">Per Sekali Permohonan</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif Dalam</div>
                              <div class="value">Rp ( Rupiah )</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif</div>
                              <div class="value">1.000.000</div>
                            </div>
                            <div class="item">
                              <div class="label">Deskripsi</div>
                              <div class="value">
                                <p>
                                  -
                                </p>
                              </div>
                            </div>
                          </div>
            
                        </div>
                        <!-- NOtes -->
                        <div class="notes">
                          <p class="text-italic">
                            Berdasarkan Peraturan Pemerintah No. 28 Tahun 2019 tentang Jenis dan Tarif atas Jenis Penerimaan Negara
                            Bukan Pajak (PNBP) yang berlaku pada Kementerian Hukum dan HAM Republik Indonesia Tanggal 18 April 2019
                            (berlaku mulai 3 Mei 2019)
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            
                <div id="modal-itas-12" class="modal-dialog">
                  <div class="overlay__modal modal-center-75">
                    <div class="modal__container">
                      <div class="header">
                        <div class="with-btn-close btn-float btn"></div>
                      </div>
                      <div class="body">
                        <!-- Content -->
                        <div class="content">
            
                          <div class="list-items">
                            <div class="item">
                              <div class="label">Jenis</div>
                              <div class="value"><strong>Izin Tinggal Terbatas masa berlaku paling lama 1 Tahun</strong></div>
                            </div>
                            <div class="item">
                              <div class="label">Satuan Ukur</div>
                              <div class="value">Per Sekali Permohonan</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif Dalam</div>
                              <div class="value">Rp ( Rupiah )</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif</div>
                              <div class="value">1.500.000</div>
                            </div>
                            <div class="item">
                              <div class="label">Deskripsi</div>
                              <div class="value">
                                <p>
                                  -
                                </p>
                              </div>
                            </div>
                          </div>
            
                        </div>
                        <!-- NOtes -->
                        <div class="notes">
                          <p class="text-italic">
                            Berdasarkan Peraturan Pemerintah No. 28 Tahun 2019 tentang Jenis dan Tarif atas Jenis Penerimaan Negara
                            Bukan Pajak (PNBP) yang berlaku pada Kementerian Hukum dan HAM Republik Indonesia Tanggal 18 April 2019
                            (berlaku mulai 3 Mei 2019)
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            
                <div id="modal-itas-24" class="modal-dialog">
                  <div class="overlay__modal modal-center-75">
                    <div class="modal__container">
                      <div class="header">
                        <div class="with-btn-close btn-float btn"></div>
                      </div>
                      <div class="body">
                        <!-- Content -->
                        <div class="content">
            
                          <div class="list-items">
                            <div class="item">
                              <div class="label">Jenis</div>
                              <div class="value"><strong>Izin Tinggal Terbatas masa berlaku paling lama 2 Tahun</strong></div>
                            </div>
                            <div class="item">
                              <div class="label">Satuan Ukur</div>
                              <div class="value">Per Sekali Permohonan</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif Dalam</div>
                              <div class="value">Rp ( Rupiah )</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif</div>
                              <div class="value">2.000.000</div>
                            </div>
                            <div class="item">
                              <div class="label">Deskripsi</div>
                              <div class="value">
                                <p>
                                  -
                                </p>
                              </div>
                            </div>
                          </div>
            
                        </div>
                        <!-- NOtes -->
                        <div class="notes">
                          <p class="text-italic">
                            Berdasarkan Peraturan Pemerintah No. 28 Tahun 2019 tentang Jenis dan Tarif atas Jenis Penerimaan Negara
                            Bukan Pajak (PNBP) yang berlaku pada Kementerian Hukum dan HAM Republik Indonesia Tanggal 18 April 2019
                            (berlaku mulai 3 Mei 2019)
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            
                <div id="modal-itas-60" class="modal-dialog">
                  <div class="overlay__modal modal-center-75">
                    <div class="modal__container">
                      <div class="header">
                        <div class="with-btn-close btn-float btn"></div>
                      </div>
                      <div class="body">
                        <!-- Content -->
                        <div class="content">
            
                          <div class="list-items">
                            <div class="item">
                              <div class="label">Jenis</div>
                              <div class="value"><strong>Izin Tinggal Terbatas masa berlaku paling lama 5 Tahun khusus Kawasan
                                  Ekonomi Khusus (KEK)</strong></div>
                            </div>
                            <div class="item">
                              <div class="label">Satuan Ukur</div>
                              <div class="value">Per Sekali Permohonan</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif Dalam</div>
                              <div class="value">Rp ( Rupiah )</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif</div>
                              <div class="value">5.000.000</div>
                            </div>
                            <div class="item">
                              <div class="label">Deskripsi</div>
                              <div class="value">
                                <p>
                                  -
                                </p>
                              </div>
                            </div>
                          </div>
            
                        </div>
                        <!-- NOtes -->
                        <div class="notes">
                          <p class="text-italic">
                            Berdasarkan Peraturan Pemerintah No. 28 Tahun 2019 tentang Jenis dan Tarif atas Jenis Penerimaan Negara
                            Bukan Pajak (PNBP) yang berlaku pada Kementerian Hukum dan HAM Republik Indonesia Tanggal 18 April 2019
                            (berlaku mulai 3 Mei 2019)
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            
                <div id="modal-itas-persetujuan-pekerja-perairan" class="modal-dialog">
                  <div class="overlay__modal modal-center-75">
                    <div class="modal__container">
                      <div class="header">
                        <div class="with-btn-close btn-float btn"></div>
                      </div>
                      <div class="body">
                        <!-- Content -->
                        <div class="content">
            
                          <div class="list-items">
                            <div class="item">
                              <div class="label">Jenis</div>
                              <div class="value"><strong>Persetujuan Izin Tinggal Terbatas untuk pekerja di perairan
                                  Indonesia</strong></div>
                            </div>
                            <div class="item">
                              <div class="label">Satuan Ukur</div>
                              <div class="value">Per Sekali Permohonan</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif Dalam</div>
                              <div class="value">Rp ( Rupiah )</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif</div>
                              <div class="value">1.000.000</div>
                            </div>
                            <div class="item">
                              <div class="label">Deskripsi</div>
                              <div class="value">
                                <p>
                                  -
                                </p>
                              </div>
                            </div>
                          </div>
            
                        </div>
                        <!-- NOtes -->
                        <div class="notes">
                          <p class="text-italic">
                            Berdasarkan Peraturan Pemerintah No. 28 Tahun 2019 tentang Jenis dan Tarif atas Jenis Penerimaan Negara
                            Bukan Pajak (PNBP) yang berlaku pada Kementerian Hukum dan HAM Republik Indonesia Tanggal 18 April 2019
                            (berlaku mulai 3 Mei 2019)
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            
                <div id="modal-itas-teraan-pekerja-perairan" class="modal-dialog">
                  <div class="overlay__modal modal-center-75">
                    <div class="modal__container">
                      <div class="header">
                        <div class="with-btn-close btn-float btn"></div>
                      </div>
                      <div class="body">
                        <!-- Content -->
                        <div class="content">
            
                          <div class="list-items">
                            <div class="item">
                              <div class="label">Jenis</div>
                              <div class="value"><strong>Teraan Izin Tinggal Terbatas untuk pekerja di perairan Indonesia</strong>
                              </div>
                            </div>
                            <div class="item">
                              <div class="label">Satuan Ukur</div>
                              <div class="value">Per Sekali Permohonan</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif Dalam</div>
                              <div class="value">Rp ( Rupiah )</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif</div>
                              <div class="value">300.000</div>
                            </div>
                            <div class="item">
                              <div class="label">Deskripsi</div>
                              <div class="value">
                                <p>
                                  -
                                </p>
                              </div>
                            </div>
                          </div>
            
                        </div>
                        <!-- NOtes -->
                        <div class="notes">
                          <p class="text-italic">
                            Berdasarkan Peraturan Pemerintah No. 28 Tahun 2019 tentang Jenis dan Tarif atas Jenis Penerimaan Negara
                            Bukan Pajak (PNBP) yang berlaku pada Kementerian Hukum dan HAM Republik Indonesia Tanggal 18 April 2019
                            (berlaku mulai 3 Mei 2019)
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            
                <div id="modal-itap-5th" class="modal-dialog">
                  <div class="overlay__modal modal-center-75">
                    <div class="modal__container">
                      <div class="header">
                        <div class="with-btn-close btn-float btn"></div>
                      </div>
                      <div class="body">
                        <!-- Content -->
                        <div class="content">
            
                          <div class="list-items">
                            <div class="item">
                              <div class="label">Jenis</div>
                              <div class="value"><strong>Izin Tinggal Tetap masa berlaku 5 tahun</strong></div>
                            </div>
                            <div class="item">
                              <div class="label">Satuan Ukur</div>
                              <div class="value">Per Sekali Permohonan</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif Dalam</div>
                              <div class="value">Rp ( Rupiah )</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif</div>
                              <div class="value">5.000.000</div>
                            </div>
                            <div class="item">
                              <div class="label">Deskripsi</div>
                              <div class="value">
                                <p>
                                  -
                                </p>
                              </div>
                            </div>
                          </div>
            
                        </div>
                        <!-- NOtes -->
                        <div class="notes">
                          <p class="text-italic">
                            Berdasarkan Peraturan Pemerintah No. 28 Tahun 2019 tentang Jenis dan Tarif atas Jenis Penerimaan Negara
                            Bukan Pajak (PNBP) yang berlaku pada Kementerian Hukum dan HAM Republik Indonesia Tanggal 18 April 2019
                            (berlaku mulai 3 Mei 2019)
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            
                <div id="modal-itap-5ths" class="modal-dialog">
                  <div class="overlay__modal modal-center-75">
                    <div class="modal__container">
                      <div class="header">
                        <div class="with-btn-close btn-float btn"></div>
                      </div>
                      <div class="body">
                        <!-- Content -->
                        <div class="content">
            
                          <div class="list-items">
                            <div class="item">
                              <div class="label">Jenis</div>
                              <div class="value"><strong>Perpanjangan Izin Tinggal Tetap masa berlaku 5 tahun</strong></div>
                            </div>
                            <div class="item">
                              <div class="label">Satuan Ukur</div>
                              <div class="value">Per Sekali Permohonan</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif Dalam</div>
                              <div class="value">Rp ( Rupiah )</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif</div>
                              <div class="value">5.000.000</div>
                            </div>
                            <div class="item">
                              <div class="label">Deskripsi</div>
                              <div class="value">
                                <p>
                                  -
                                </p>
                              </div>
                            </div>
                          </div>
            
                        </div>
                        <!-- NOtes -->
                        <div class="notes">
                          <p class="text-italic">
                            Berdasarkan Peraturan Pemerintah No. 28 Tahun 2019 tentang Jenis dan Tarif atas Jenis Penerimaan Negara
                            Bukan Pajak (PNBP) yang berlaku pada Kementerian Hukum dan HAM Republik Indonesia Tanggal 18 April 2019
                            (berlaku mulai 3 Mei 2019)
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            
                <div id="modal-itap-unlimited" class="modal-dialog">
                  <div class="overlay__modal modal-center-75">
                    <div class="modal__container">
                      <div class="header">
                        <div class="with-btn-close btn-float btn"></div>
                      </div>
                      <div class="body">
                        <!-- Content -->
                        <div class="content">
            
                          <div class="list-items">
                            <div class="item">
                              <div class="label">Jenis</div>
                              <div class="value"><strong>Perpanjangan Izin Tinggal Tetap untuk jangka waktu tak terbatas</strong>
                              </div>
                            </div>
                            <div class="item">
                              <div class="label">Satuan Ukur</div>
                              <div class="value">Per Sekali Permohonan</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif Dalam</div>
                              <div class="value">Rp ( Rupiah )</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif</div>
                              <div class="value">10.200.000</div>
                            </div>
                            <div class="item">
                              <div class="label">Deskripsi</div>
                              <div class="value">
                                <p>
                                  -
                                </p>
                              </div>
                            </div>
                          </div>
            
                        </div>
                        <!-- NOtes -->
                        <div class="notes">
                          <p class="text-italic">
                            Berdasarkan Peraturan Pemerintah No. 28 Tahun 2019 tentang Jenis dan Tarif atas Jenis Penerimaan Negara
                            Bukan Pajak (PNBP) yang berlaku pada Kementerian Hukum dan HAM Republik Indonesia Tanggal 18 April 2019
                            (berlaku mulai 3 Mei 2019)
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            
                <div id="modal-imk-6" class="modal-dialog">
                  <div class="overlay__modal modal-center-75">
                    <div class="modal__container">
                      <div class="header">
                        <div class="with-btn-close btn-float btn"></div>
                      </div>
                      <div class="body">
                        <!-- Content -->
                        <div class="content">
            
                          <div class="list-items">
                            <div class="item">
                              <div class="label">Jenis</div>
                              <div class="value"><strong>Izin Masuk Kemabali masa berlaku paling lama 6 bulan</strong></div>
                            </div>
                            <div class="item">
                              <div class="label">Satuan Ukur</div>
                              <div class="value">Per Sekali Permohonan</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif Dalam</div>
                              <div class="value">Rp ( Rupiah )</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif</div>
                              <div class="value">600.000</div>
                            </div>
                            <div class="item">
                              <div class="label">Deskripsi</div>
                              <div class="value">
                                <p>
                                  -
                                </p>
                              </div>
                            </div>
                          </div>
            
                        </div>
                        <!-- NOtes -->
                        <div class="notes">
                          <p class="text-italic">
                            Berdasarkan Peraturan Pemerintah No. 28 Tahun 2019 tentang Jenis dan Tarif atas Jenis Penerimaan Negara
                            Bukan Pajak (PNBP) yang berlaku pada Kementerian Hukum dan HAM Republik Indonesia Tanggal 18 April 2019
                            (berlaku mulai 3 Mei 2019)
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            
                <div id="modal-imk-12" class="modal-dialog">
                  <div class="overlay__modal modal-center-75">
                    <div class="modal__container">
                      <div class="header">
                        <div class="with-btn-close btn-float btn"></div>
                      </div>
                      <div class="body">
                        <!-- Content -->
                        <div class="content">
            
                          <div class="list-items">
                            <div class="item">
                              <div class="label">Jenis</div>
                              <div class="value"><strong>Izin Masuk Kemabali masa berlaku paling lama 1 Tahun</strong></div>
                            </div>
                            <div class="item">
                              <div class="label">Satuan Ukur</div>
                              <div class="value">Per Sekali Permohonan</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif Dalam</div>
                              <div class="value">Rp ( Rupiah )</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif</div>
                              <div class="value">1.000.000</div>
                            </div>
                            <div class="item">
                              <div class="label">Deskripsi</div>
                              <div class="value">
                                <p>
                                  -
                                </p>
                              </div>
                            </div>
                          </div>
            
                        </div>
                        <!-- NOtes -->
                        <div class="notes">
                          <p class="text-italic">
                            Berdasarkan Peraturan Pemerintah No. 28 Tahun 2019 tentang Jenis dan Tarif atas Jenis Penerimaan Negara
                            Bukan Pajak (PNBP) yang berlaku pada Kementerian Hukum dan HAM Republik Indonesia Tanggal 18 April 2019
                            (berlaku mulai 3 Mei 2019)
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            
                <div id="modal-imk-24" class="modal-dialog">
                  <div class="overlay__modal modal-center-75">
                    <div class="modal__container">
                      <div class="header">
                        <div class="with-btn-close btn-float btn"></div>
                      </div>
                      <div class="body">
                        <!-- Content -->
                        <div class="content">
            
                          <div class="list-items">
                            <div class="item">
                              <div class="label">Jenis</div>
                              <div class="value"><strong>Izin Masuk Kemabali masa berlaku paling lama 2 Tahun</strong></div>
                            </div>
                            <div class="item">
                              <div class="label">Satuan Ukur</div>
                              <div class="value">Per Sekali Permohonan</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif Dalam</div>
                              <div class="value">Rp ( Rupiah )</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif</div>
                              <div class="value">1.750.000</div>
                            </div>
                            <div class="item">
                              <div class="label">Deskripsi</div>
                              <div class="value">
                                <p>
                                  -
                                </p>
                              </div>
                            </div>
                          </div>
            
                        </div>
                        <!-- NOtes -->
                        <div class="notes">
                          <p class="text-italic">
                            Berdasarkan Peraturan Pemerintah No. 28 Tahun 2019 tentang Jenis dan Tarif atas Jenis Penerimaan Negara
                            Bukan Pajak (PNBP) yang berlaku pada Kementerian Hukum dan HAM Republik Indonesia Tanggal 18 April 2019
                            (berlaku mulai 3 Mei 2019)
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            
                <div id="modal-imk-60" class="modal-dialog">
                  <div class="overlay__modal modal-center-75">
                    <div class="modal__container">
                      <div class="header">
                        <div class="with-btn-close btn-float btn"></div>
                      </div>
                      <div class="body">
                        <!-- Content -->
                        <div class="content">
            
                          <div class="list-items">
                            <div class="item">
                              <div class="label">Jenis</div>
                              <div class="value"><strong>Izin Masuk Kemabali masa berlaku paling lama 5 Tahun khusus pada Kawasan
                                  Ekonomi Khusus (KEK)</strong></div>
                            </div>
                            <div class="item">
                              <div class="label">Satuan Ukur</div>
                              <div class="value">Per Sekali Permohonan</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif Dalam</div>
                              <div class="value">Rp ( Rupiah )</div>
                            </div>
                            <div class="item">
                              <div class="label">Tarif</div>
                              <div class="value">3.250.000</div>
                            </div>
                            <div class="item">
                              <div class="label">Deskripsi</div>
                              <div class="value">
                                <p>
                                  -
                                </p>
                              </div>
                            </div>
                          </div>
            
                        </div>
                        <!-- NOtes -->
                        <div class="notes">
                          <p class="text-italic">
                            Berdasarkan Peraturan Pemerintah No. 28 Tahun 2019 tentang Jenis dan Tarif atas Jenis Penerimaan Negara
                            Bukan Pajak (PNBP) yang berlaku pada Kementerian Hukum dan HAM Republik Indonesia Tanggal 18 April 2019
                            (berlaku mulai 3 Mei 2019)
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            
                <div class="float-menu">
                  <a href="wna-price" class="nav-single to-back">
                    <i class="icon-back"></i>
                    <span class="text nav-back">Kembali</span>
                  </a>
                </div>
              </main>',
            ], [
              'title' => 'Alur Proses Permohonan Izin Tinggal',
              'slug' => 'wna-flow',
              'language_id' => 1,
              'page' => '<main class="page-full-single">
                <div class="c-header">
                  <div class="office">
                    <img class="logo" src="../assets/vectors/logoditjenim.png" alt="logo">
                  </div>
                  <div class="title">
                    <h2>Alur Proses Layanan Keimigrasian Bagi WNA</h2>
                  </div>
                </div>
            
                <div id="wni-alur">
                  <div class="container-center">
                    <table id="t-buttons" class="container-button">
                      <tr>
                        <td>
                          <div class="_btn-inline-ellipsis">
                            <div class="button modal-button" data-href="wna-itk">Permohonan Perpanjangan ITK/VOA</div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="_btn-inline-ellipsis">
                            <div class="button modal-button" data-href="wna-itas">Permohonan Izin Tinggal Terbatas (ITAS)</div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="_btn-inline-ellipsis">
                            <div class="button modal-button" data-href="wna-itap">Permohonan Izin Tinggal Tetap (ITAP)</div>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
            
                <!-- MODAL PAS BARU -->
                <div id="modal-wna-itk" class="modal-dialog">
                  <div class="overlay__modal-full modal-full with-btn-close">
                    <div class="modal__container">
                      <div class="header transparent">
                        <h2 class="title">Permohonan ITK/VOA</h2>
                        <div class="with-btn-close"></div>
                      </div>
                      <div class="body">
                        body
                      </div>
                    </div>
                  </div>
                </div>
            
                <!-- MODAL PAS BARU -->
                <div id="modal-wna-itas" class="modal-dialog">
                  <div class="overlay__modal-full modal-full with-btn-close">
                    <div class="modal__container">
                      <div class="header transparent">
                        <h2 class="title">Permohonan Izin Tinggal Terbatas (ITAS)</h2>
                        <div class="with-btn-close"></div>
                      </div>
                      <div class="body">
                        Body
                      </div>
                    </div>
                  </div>
                </div>
            
                <div id="modal-wna-itap" class="modal-dialog">
                  <div class="overlay__modal-full modal-full with-btn-close">
                    <div class="modal__container">
                      <div class="header transparent">
                        <h2 class="title">Permohonan Izin Tinggal Tetap (ITAP)</h2>
                        <div class="with-btn-close"></div>
                      </div>
                      <div class="body">
                        Body
                      </div>
                    </div>
                  </div>
                </div>
            
                <div class="float-menu">
                  <a href="wna-menu" class="nav-single to-back">
                    <i class="icon-back"></i>
                    <span class="text nav-back">Kembali</span>
                  </a>
                </div>
              </main>',
            ], [
              'title' => 'Kontak Kami',
              'slug' => 'contact',
              'language_id' => 1,
              'page' => '<main class="page-full-single">
                <div class="c-header">
                  <div class="office">
                    <img class="logo" src="../assets/vectors/logoditjenim.png" alt="logo">
                  </div>
                  <div class="title">
                  </div>
                </div>
            
                <div id="contact">
            
                  <div class="contents">
            
                    <div class="buttons">
                      <a href="#" class="btn-social btn-web">tenate.imigrasi.go.id
                      </a>
                      <a href="#" class="btn-social btn-fb">@kanim.ternate
                      </a>
                      <a href="#" class="btn-social btn-ig">@kanim.ternate
                      </a>
                      <a href="#" class="btn-social btn-tw">@kanim.ternate
                      </a>
                      <a href="#" class="btn-social btn-wa">082195541832 <span class="text-small">(Khusus Pengaduan)</span>
                      </a>
                    </div>
            
                  </div>
            
            
                </div>
            
                <div class="float-menu">
                  <a href="dashboard" class="nav-single">
                    <i class="icon-dashboard"></i>
                    <span class="nav-text">Dashboard</span>
                  </a>
                </div>
              </main>',
            ], [
              'title' => 'Survei Kepuasan Masyarakat',
              'slug' => 'survei',
              'language_id' => 1,
              'page' => '<main class="page-full-single">
                <div id="ikm">
                  <div class="mido">
                    <div class="ballon">
                      <div class="ballon-text">
                        <h4><strong>Haii.. Sobat Urban. </strong></h4>
                        <p>
                          Bantu kami untuk membuat layanan Imigrasi lebih baik lagi, dengan mengisi survei pada link
                          <strong>bit.ly/surveikanimternate</strong> atau scan QR-Code disamping dari smartphone kamu.
                        </p>
                      </div>
                    </div>
                  </div>
            
                  <div class="qr-ikm">
                    <div class="qr-box">
                      qrtes=xt
                    </div>
                  </div>
                </div>
            
                <div class="float-menu">
                  <a href="dashboard" class="nav-single">
                    <i class="icon-dashboard"></i>
                    <span class="nav-text">Dashboard</span>
                  </a>
                </div>
              </main>',
            ],
        ]);

        DB::table('bulletins')->insert([
          [
            'slug' => 'infrastruktur-darat,-konektivitas-jadi-utama',
            'publish' => TRUE,
            'title'=> 'Infrastruktur Darat, Konektivitas Jadi Utama',
            'lead_title' => 'Antarkan Perjalanan Masyarakat Jadi Lebih Lancar',
            'lead_text' => 'Infrastruktur jalan tol di Indonesia membuat perjalanan masyarakat lebih mudah dan lancar. Tak hanya Tol Trans-Jawa, kini akses jalan tol di seluruh Indonesia sedang dikebut pembangunannya oleh pemerintah untuk memenuhi konektivitas antarwilayah.',
            'lead_bg' => 'http://dev.local:8000/assets/lead_bg.jpg',
            'content' => '<p>Coba</p>',
          ], [
            'slug' => 'infrastruktur-darat,-konektivitas-jadi-utama-2',
            'publish' => TRUE,
            'title'=> 'Infrastruktur Darat, Konektivitas Jadi Utama 2',
            'lead_title' => 'Antarkan Perjalanan Masyarakat Jadi Lebih Lancar 2',
            'lead_text' => '2 Infrastruktur jalan tol di Indonesia membuat perjalanan masyarakat lebih mudah dan lancar. Tak hanya Tol Trans-Jawa, kini akses jalan tol di seluruh Indonesia sedang dikebut pembangunannya oleh pemerintah untuk memenuhi konektivitas antarwilayah.',
            'lead_bg' => 'http://dev.local:8000/assets/lead_bg.jpg',
            'content' => '<p>Coba 2</p>'
          ]
        ]);
    }
}
