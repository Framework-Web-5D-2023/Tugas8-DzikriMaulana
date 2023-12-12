<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = 'order';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'alamat', 'jumlah', 'id_product', 'jumlahbayar', 'kodepos', 'kecamatan', 'kabupaten', 'provinsi', 'penerima', 'bukti_pembayaran'];
    protected $useTimestamp = true;

    public function saveOrder($data)
    {
        return $this->save($data);
    }

    // limit order
    public function getTotalOrders()
    {
        return $this->countAll(); // Assuming you are using CodeIgniter 4's countAll method
    }


    public function getDetail()
    {
        return $this->findall();
    }

    public function getSpecific($id)
    {
        return $this->where('id', $id)->first();
    }

    public function updateAction($id, $data)
    {
        return $this->update($id, $data);
    }

}
