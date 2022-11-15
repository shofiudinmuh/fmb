<?php
class data_model extends CI_Model
{
    public function __construct()

    {
        $this->load->database('db_fmb');
    }

    public function tabel_dashboard()
    {
        $this->db->getView('table_dashboard_admin');
        // $data_dash = $this->db->query("SELECT pesanan.ID_PESAN, pesanan.USERNAME, barang.NM_BARANG,detail_pesanan.PENGIRIMAN, 
        // admin_st.ADM_STATUS, produksi_st.PRODUKSI_STATUS, packing_st.PACK_STATUS, pesanan.TOTAL_BAYAR
        // FROM detail_pesanan
        // LEFT JOIN barang
        //     ON barang.ID_BARANG = detail_pesanan.ID_BARANG
        // LEFT JOIN pesanan 
        //     ON pesanan.ID_PESAN = detail_pesanan.ID_PESAN
        // LEFT JOIN admin_st 
        //     ON detail_pesanan.ID_STATUS = admin_st.ID_STATUS
        // LEFT JOIN produksi_st 
        //     ON detail_pesanan.ID_PRODUKSI = produksi_st.ID_PRODUKSI
        // LEFT JOIN packing_st
        //     ON detail_pesanan.ID_PACKING = packing_st.ID_PACKING ");
        $data_dash = $this->db->query('SELECT * FROM pesanan');
        return $data_dash->row();
    }
}