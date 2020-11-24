<?php

class Rental extends CI_Controller
{

    public function tambah_rental($id)
    {
        $data['detail'] = $this->rental_model->ambil_id_mobil($id);
        $this->load->view('templates_customer/header');
        $this->load->view('customer/tambah_rental', $data);
        $this->load->view('templates_customer/footer');
    }

    public function tambah_rental_aksi()
    {
        $id_customer        = $this->session->userdata('id_customer');
        $id_mobil           = $this->input->post('id_mobil');
        $tanggal_rental     = $this->input->post('tanggal_rental');
        $tanggal_kembali    = $this->input->post('tanggal_kembali');
        $denda              = $this->input->post('denda');
        $harga              = $this->input->post('harga');

        $data = array(
            'id_customer'           => $id_customer,
            'id_mobil'              => $id_mobil,
            'tanggal_rental'        => $tanggal_rental,
            'tanggal_kembali'       => $tanggal_kembali,
            'denda'                 => $denda,
            'harga'                 => $harga,
            'tanggal_pengembalian'  => '_',
            'status_rental'         => 'Belum Selesai',
            'status_pengembalian'   => 'Belum Kembali',
            'total_denda'           => '0'
        );

        $this->rental_model->insert_data($data, 'transaksi');

        $status = array(
            'status'    => '0'
        );
        $id = array(
            'id_mobil'  =>  $id_mobil
        );
        $this->rental_model->update_data('mobil', $status, $id,);


        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                 Transaksi Berhasil, Silahkan Checkout!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
        redirect('customer/data_mobil');
    }
}
