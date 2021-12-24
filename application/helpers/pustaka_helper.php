<?php

function cek_login()
{
    $ci = get_instance();

    if (!$ci->session->userdata('email')) {
        $ci->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Akses ditolak. Anda belum login!! </div>');
        redirect('autentifikasi');
    } else {
        $role_id = $ci->session->userdata('role_id');
    }
}

/*function cek_adm_login()
{
    $ci = get_instance();

    if (!$ci->session->userdata('email_adm')) {
        $ci->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Akses ditolak. Anda belum login!! </div>');
        redirect('autentifikasi_adm');
    } else {
        $role_id_adm = $ci->session->userdata('role_id_adm');
    }
}*/
?>
