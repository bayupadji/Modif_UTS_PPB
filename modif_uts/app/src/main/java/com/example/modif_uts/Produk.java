package com.example.modif_uts;

public class Produk {
    private String kode;
    private String nama;
    private String harga;
    //private int img;
    private String img;

    public Produk() {
    }

    public Produk(String kode, String nama, String harga, String img) {
        this.kode = kode;
        this.nama = nama;
        this.harga = harga;
        this.img = img;
    }

    public String getNama() {
        return nama;
    }

    public void setNama(String nama) {
        this.nama = nama;
    }

    public String getKode() {
        return kode;
    }

    public void setKode(String kode) {
        this.kode = kode;
    }

    public String getHarga() {
        return harga;
    }

    public void setHarga(String harga) {
        this.harga = harga;
    }

    public void setImg(String img) {
        this.img = img;
    }

    public String getImg() {
        return "http://10.0.2.2/crud_uas/images/" + img;
    }
}
