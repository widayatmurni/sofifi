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
                'page' => '  <main class="page-full-single">
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
                      <img class="app-brand" src="http://dev.local:8000/assets/vectors/logoapp.png" alt="app">
                      <div class="names">
                        <div class="app-name">SOFIFI</div>
                        <div class="app-name-2">Sitem Operasi Interaktif Imigrasi</div>
                      </div>
                    </div>
            
                  </div>
            
                  <div class="contents">
                    <!-- <video class="vid-player" src="http://dev.local:8000/assets/coba.mov" autoplay /> -->
                  </div>
            
                  <div class="float-nav">
                    <div class="nav-box">
                      <div class="nav-btn nav-item" data-href="gallery">
                        <div class="nav-icon">
                          <img class="img-icon" src="../assets/vectors/gallery.png" alt="gallery">
                        </div>
                        <div class="nav-text">Gallery</div>
                      </div>
                      <div class="nav-btn nav-item" data-href="news">
                        <div class="nav-icon">
                          <img class="img-icon" src="../assets/vectors/news.png" alt="news">
                        </div>
                        <div class="nav-text">Berita</div>
                      </div>
                      <div class="nav-btn nav-item" data-href="definition">
                        <div class="nav-icon">
                          <img class="img-icon" src="../assets/vectors/wna.png" alt="wna">
                        </div>
                        <div class="nav-text">WNA</div>
                      </div>
                      <div class="nav-btn nav-language">
                        <span class="text">ID</span>
                        <img class="flag" src="../assets/vectors/flag_id.png" alt="flag">
                      </div>
                      <div class="nav-btn nav-item" data-href="wni-menu">
                        <div class="nav-icon">
                          <img class="img-icon" src="../assets/vectors/wni.png" alt="wni">
                        </div>
                        <div class="nav-text">WNI</div>
                      </div>
                      <div class="nav-btn nav-item" data-href="contact">
                        <div class="nav-icon">
                          <img class="img-icon" src="../assets/vectors/contact.png" alt="contact">
                        </div>
                        <div class="nav-text">Kontak</div>
                      </div>
                      <div class="nav-btn nav-item" data-href="survei">
                        <div class="nav-icon">
                          <img class="img-icon" src="../assets/vectors/survei.png" alt="survei">
                        </div>
                        <div class="nav-text">Survei</div>
                      </div>
                    </div>
                  </div>
            
                  <div class="dialog-choose-language">
                    <div class="choose-language overlay-bg">
            
                      <div class="language-box">
                        <div class="items">
            
                          <div class="language-item" data-href="id">
                            <div class="flag">
                              <img src="../assets/vectors/flag_id.png" alt="Flag">
                            </div>
                            <div class="text">Indonesia</div>
                          </div>
            
                          <div class="language-item" data-href="en">
                            <div class="flag">
                              <img src="../assets/vectors/flag_id.png" alt="Flag">
                            </div>
                            <div class="text">Inggris</div>
                          </div>
            
                          <div class="language-item" data-href="ch">
                            <div class="flag">
                              <img src="../assets/vectors/flag_id.png" alt="Flag">
                            </div>
                            <div class="text">China</div>
                          </div>
            
                          <div class="language-item" data-href="ko">
                            <div class="flag">
                              <img src="../assets/vectors/flag_id.png" alt="Flag">
                            </div>
                            <div class="text">Korea</div>
                          </div>
            
                        </div>
                      </div>
            
                    </div>
                  </div>
                </div>
            
              </main>',
            ], [
                'title' => 'WNI MENU',
                'slug' => 'wni-menu',
                'language_id' => 1,
                'page' => '  <main class="page-full-single">
                <div class="c-header">
                  <div class="office">
                    <img class="logo" src="/assets/vectors/logoditjenim.png" alt="logo">
                  </div>
                  <div class="title">
                    <h2>Layanan Imigrasi Bagi Warga Negara Indonesia ( WNI )</h2>
                  </div>
                </div>
                <div id="wni-menu">
                  <div class="overlay"></div>
                  <div class="menus">
            
                    <div class="menu" data-href="definition">
                      <div class="icon-box">
                        <i class="icon-definition"></i>
                      </div>
                      <div class="text">Definisi</div>
                    </div>
            
                    <div class="menu" data-href="requirement">
                      <div class="icon-box">
                        <!-- <svg width="175px" height="168px" viewBox="0 0 175 168" version="1.1" xmlns="http://www.w3.org/2000/svg" -->
                        <i class="icon-requirement"></i>
                      </div>
                      <div class="text">Persyaratan</div>
                    </div>
            
                    <div class="menu" data-href="price">
                      <div class="icon-box">
                        <!-- <svg width="178px" height="145px" viewBox="0 0 178 145" version="1.1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink">
                        </svg> -->
                        <i class="icon-price"></i>
                      </div>
                      <div class="text">Tarif</div>
                    </div>
            
                    <div class="menu" data-href="flow">
                      <div class="icon-box">
                        <!-- <svg width="157px" height="156px" viewBox="0 0 157 156" version="1.1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink">
                        </svg> -->
                        <i class="icon-flow"></i>
                      </div>
                      <div class="text">Alur Proses</div>
                    </div>
            
                    <div class="menu" data-href="mpaspor">
                      <div class="icon-box">
            
                        <!-- <svg width="144px" height="138px" viewBox="0 0 144 138" version="1.1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink">
                        </svg> -->
                        <i class="icon-mpaspor"></i>
                      </div>
                      <div class="text">M-Paspor</div>
                    </div>
            
                  </div>
                </div>
            
                <div class="float-menu">
                  <div class="nav-single to-dashboard" data-href="dashboard">
                    <i class="icon-dashboard"></i>
                    <span class="text">Dashboard</span>
                  </div>
                </div>
              </main>',
            ], [
                'title' => 'WNA MENU',
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
            
                    <div class="menu" data-href="wna-definition">
                      <div class="icon-box">
                        <i class="icon-definition"></i>
                      </div>
                      <div class="text">Definisi</div>
                    </div>
            
                    <div class="menu" data-href="wna-requirement">
                      <div class="icon-box">
                        <!-- <svg width="175px" height="168px" viewBox="0 0 175 168" version="1.1" xmlns="http://www.w3.org/2000/svg" -->
                        <i class="icon-requirement"></i>
                      </div>
                      <div class="text">Persyaratan</div>
                    </div>
            
                    <div class="menu" data-href="wna-price">
                      <div class="icon-box">
                        <!-- <svg width="178px" height="145px" viewBox="0 0 178 145" version="1.1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink">
                        </svg> -->
                        <i class="icon-price"></i>
                      </div>
                      <div class="text">Tarif</div>
                    </div>
            
                    <div class="menu" data-href="wna-flow">
                      <div class="icon-box">
                        <!-- <svg width="157px" height="156px" viewBox="0 0 157 156" version="1.1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink">
                        </svg> -->
                        <i class="icon-flow"></i>
                      </div>
                      <div class="text">Alur Proses</div>
                    </div>
            
                  </div>
                </div>
            
                <div class="float-menu">
                  <div class="nav-single to-dashboard" data-href="dashboard">
                    <i class="icon-dashboard"></i>
                    <span class="text">Dashboard</span>
                  </div>
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
                    <div class="btn-jenis-layanan nav-link" data-href="definition-services">Jenis Layanan Paspor</div>
                  </div>
                </div>
            
                <div class="float-menu">
                  <div class="nav-single to-back" data-href="wni-menu">
                    <i class="icon-back"></i>
                    <span class="text nav-back">Kembali</span>
                  </div>
                </div>
              </main>',
            ], [
              'title' => 'Definisi Jenis Layanan Paspor',
              'slug' => 'definition-services',
              'language_id' => 1,
              'page' => '  <main class="page-full-single">
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
            
                    <div class="option-btn modal-button" data-href="expired">Permohonan Penggantian Paspor</div>
                    <div class="option-btn modal-button" data-href="lost">Permohonan Penggantian Paspor Hilang</div>
                    <div class="option-btn modal-button" data-href="broke">Permohonan Penggantian Paspor Rusak</div>
                    <div class="option-btn modal-button" data-href="new">Permohonan Paspor Baru</div>
            
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
                        <button id="modal-close" class="btn">OK</button>
                      </div>
                    </div>
                  </div>
                </div>
            
                <div id="modal-pass-change" class="modal-dialog">
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
                        <button id="modal-close" class="btn">OK</button>
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
                        <button id="modal-close" class="btn">OK</button>
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
                        <button id="modal-close" class="btn">OK</button>
                      </div>
                    </div>
                  </div>
                </div>
            
                <div class="float-menu">
                  <div class="nav-single to-back" data-href="definition">
                    <i class="icon-back"></i>
                    <span class="text">Kembali</span>
                  </div>
                </div>
              </main>',
            ], [
              'title' => 'Definisi Paspor',
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
                            <div class="btn-link btn-text-ellipsis modal-button" data-href="new">Permohonan Pembuatan Paspor Baru
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="content-btn">
                            <div class="btn-link btn-text-ellipsis modal-button" data-href="expired">Permohonan Penggantian Paspor
                              Habis Masa
                              Berlaku</div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="content-btn">
                            <div class="btn-link btn-text-ellipsis modal-button" data-href="lost">Permohonan Penggantian Paspor
                              Hilang</div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="content-btn">
                            <div class="btn-link btn-text-ellipsis modal-button" data-href="broke">Permohonan Penggantian Paspor
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
                        Persyaratan
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
                        Persyaratan
                      </div>
                    </div>
                  </div>
                </div>
            
                <div id="modal-pass-lost" class="modal-dialog">
                  <div class="overlay__modal-full modal-full with-btn-close">
                    <div class="modal__container">
                      <div class="header transparent">
                        <h2 class="title">Persyaratan Permohonan Penggantian Paspor Hilang</h2>
                        <div class="with-btn-close btn"></div>
                      </div>
                      <div class="body">
                        Persyaratan
                      </div>
                    </div>
                  </div>
                </div>
            
                <div id="modal-pass-broke" class="modal-dialog">
                  <div class="overlay__modal-full modal-full with-btn-close">
                    <div class="modal__container">
                      <div class="header transparent">
                        <h2 class="title">Persyaratan Permohonan Penggantian Paspor Rusak</h2>
                        <div class="with-btn-close btn"></div>
                      </div>
                      <div class="body">
                        Persyaratan
                      </div>
                    </div>
                  </div>
                </div>
            
                <div class="float-menu">
                  <div class="nav-single to-back" data-href="wni-menu">
                    <i class="icon-back"></i>
                    <span class="text">Kembali</span>
                  </div>
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
                <div id="modal-pass-biasa" class="modal-dialog">
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
                <div id="modal-pass-el" class="modal-dialog">
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
                <div id="modal-pass-percepatan" class="modal-dialog">
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
                <div id="modal-pass-rusak" class="modal-dialog">
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
                <div id="modal-pass-hilang" class="modal-dialog">
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
                  <div class="nav-single to-back" data-href="wni-menu">
                    <i class="icon-back"></i>
                    <span class="text">Kembali</span>
                  </div>
                </div>
              </main>',
            ], [
              'title' => 'Tarif Pelayanan Paspor',
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
                          <div class="button _btn-inline-ellipsis" data="pas-new">
                            <p>Permohonan Pembuatan Paspor Baru</p>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="button _btn-inline-ellipsis" data="pas-expired">
                            <p>Permohona Pembuatan Paspor Habis Masa Belakunya</p>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="button _btn-inline-ellipsis" data="pas-lost">
                            <p>Permohona Pembuatan Paspor Hilang</p>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="button _btn-inline-ellipsis" data="pas-broke">
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
            
                <div class="float-menu">
                  <div class="nav-single to-back" data-href="wni-menu">
                    <i class="icon-back"></i>
                    <span class="text">Kembali</span>
                  </div>
                </div>
              </main>',
            ], [
              'title' => 'Tarif Pelayanan Paspor',
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
                        <table>
                          <tr>
                            <td>
                              <div>
                                <h3>Intalasi Aplikasi</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima deserunt iure, dolorem facilis
                                  sequi cum molestiae natus ab, est reiciendis quis voluptatibus? Laboriosam fuga culpa nesciunt
                                  recusandae alias soluta similique.</p>
                              </div>
                            </td>
                          </tr>
                        </table>
                      </div>
            
                    </div>
                    <div class="phone-skin-box">
                      <div class="content-img">
            
                      </div>
                      <img src="/assets/vectors/phone-skin.svg" alt="" srcset="">
                    </div>
                  </div>
                </div>
            
                <div class="float-menu">
                  <div class="nav-single to-back" data-href="wni-menu">
                    <i class="icon-back"></i>
                    <span class="text nav-back">Kembali</span>
                  </div>
                </div>
              </main>',
            ],
        ]);
    }
}
