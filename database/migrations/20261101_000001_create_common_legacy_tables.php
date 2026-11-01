<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Create tables shared by the LPDB and GWA SQL dumps.
     * Definitions are taken from the GWA dump (MariaDB/MySQL).
     * Review the documented schema differences before using in production.
     */
    public function up(): void
    {
        // Table: manggota
        DB::unprepared(<<<'SQL'
CREATE TABLE `manggota` (
  `id` int(11) NOT NULL,
  `Cabang` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `NoKTP` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `NmAnggota` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `JnsKelamin` char(1) DEFAULT NULL,
  `TmpLahir` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `TglLahir` datetime DEFAULT NULL,
  `MAgama` char(1) DEFAULT NULL,
  `StsKawin` char(1) DEFAULT NULL,
  `Pekerjaan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `AlamatKTP` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `AlamatTinggal` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `NoTelp` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `TglGabung` datetime DEFAULT NULL,
  `Refrensi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Keterangan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Photo` longblob DEFAULT NULL,
  `LogAnggota1` tinyint(1) DEFAULT 0,
  `LogAnggota2` tinyint(1) DEFAULT 0,
  `NoAnggota` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `TglKeluar` datetime DEFAULT NULL,
  `AlasanKeluar` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `TarikS01` double DEFAULT 0,
  `TarikS02` double DEFAULT 0,
  `TarikS03` double DEFAULT 0,
  `TarikS04` double DEFAULT 0,
  `TglTarik` datetime DEFAULT NULL,
  `TarikSHU` double DEFAULT 0,
  `Penerima_Dana` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Kota` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Propinsi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `JenisIsaha` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `L1` double DEFAULT 0,
  `P1` double DEFAULT 0,
  `L2` double DEFAULT 0,
  `P2` double DEFAULT 0,
  `Omset1` double DEFAULT 0,
  `Omset2` double DEFAULT 0,
  `PIN` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `TglMinta_Keluar` datetime DEFAULT NULL,
  `Pendidikan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `AlamatUsaha` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `NoTelpUsaha` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `NmAnggota2` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Pekerjaan2` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `AlamatUsaha2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `NoTelpUsaha2` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `LogSecurity` tinyint(1) DEFAULT 0,
  `NoAnggota_Lama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `S01` double DEFAULT 0,
  `S02` double DEFAULT 0,
  `lat` double(18,6) DEFAULT 0.000000,
  `long` double(18,6) DEFAULT 0.000000,
  `foto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: mbunga
        DB::unprepared(<<<'SQL'
CREATE TABLE `mbunga` (
  `id` int(11) NOT NULL,
  `KdBunga` varchar(100) NOT NULL,
  `BungaFlat` double DEFAULT NULL,
  `KetBungaPinj` varchar(100) DEFAULT NULL,
  `FlagPajak` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: mcabang
        DB::unprepared(<<<'SQL'
CREATE TABLE `mcabang` (
  `Cabang` varchar(100) NOT NULL,
  `NAMACAB` varchar(100) DEFAULT NULL,
  `NO` decimal(18,0) DEFAULT NULL,
  `Alamat` text DEFAULT NULL,
  `bh` text DEFAULT NULL,
  `pad` text DEFAULT NULL,
  `telp` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: mcolector
        DB::unprepared(<<<'SQL'
CREATE TABLE `mcolector` (
  `Colector` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `KetColector` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Cabang` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Parent` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `TPinjaman` double DEFAULT 0,
  `TS_OrgPokok` bigint(20) DEFAULT 0,
  `TSPokok` double DEFAULT 0,
  `TS_OrgWajib` bigint(20) DEFAULT 0,
  `TSWajib` double DEFAULT 0,
  `TS_OrgSukarela` bigint(20) DEFAULT 0,
  `TSSukarela` double DEFAULT 0,
  `TS_OrgBerjangka` bigint(20) DEFAULT 0,
  `TSBerjangka` double DEFAULT 0,
  `Nu` double DEFAULT 0,
  `TOrg_Pinjaman` double DEFAULT 0,
  `Aktif` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: mdana
        DB::unprepared(<<<'SQL'
CREATE TABLE `mdana` (
  `Seq` decimal(18,0) NOT NULL,
  `Kategori` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: mkategori_pinjaman
        DB::unprepared(<<<'SQL'
CREATE TABLE `mkategori_pinjaman` (
  `Id` int(11) NOT NULL,
  `Kategori` varchar(100) DEFAULT NULL,
  `Tujuan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: mkdtrans
        DB::unprepared(<<<'SQL'
CREATE TABLE `mkdtrans` (
  `KdTrans` char(3) NOT NULL,
  `NmTrans` varchar(100) DEFAULT NULL,
  `Bunga` double DEFAULT 0,
  `Tipe` varchar(100) DEFAULT NULL,
  `Status` char(1) DEFAULT NULL,
  `NoCount` varchar(100) DEFAULT NULL,
  `KetTrans` varchar(100) DEFAULT NULL,
  `KatG` char(1) DEFAULT NULL,
  `LogAnggota` tinyint(1) DEFAULT 0,
  `KdTrans_Simpanan` char(3) DEFAULT NULL,
  `KdTrans_Penarikan` char(3) DEFAULT NULL,
  `SaldoMinimal` double DEFAULT 0,
  `NoCount_Bunga` varchar(100) DEFAULT NULL,
  `KdBunga` char(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: mtenor
        DB::unprepared(<<<'SQL'
CREATE TABLE `mtenor` (
  `Tenor` double DEFAULT NULL,
  `Persen_Bunga` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: periode
        DB::unprepared(<<<'SQL'
CREATE TABLE `periode` (
  `id` double DEFAULT NULL,
  `bulan` varchar(6) DEFAULT NULL,
  `namabulan` varchar(300) DEFAULT NULL,
  `flag` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
SQL);

        // Table: periode_thn
        DB::unprepared(<<<'SQL'
CREATE TABLE `periode_thn` (
  `id` double DEFAULT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  `flag` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
SQL);

        // Table: tAgtOut
        DB::unprepared(<<<'SQL'
CREATE TABLE `tAgtOut` (
  `Cabang` varchar(10) DEFAULT NULL,
  `Id` decimal(18,0) NOT NULL,
  `NoAnggota` varchar(100) DEFAULT NULL,
  `NoSimpan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TglPengajuan` datetime DEFAULT NULL,
  `TglPenarikan` datetime DEFAULT NULL,
  `TglKeluar` datetime DEFAULT NULL,
  `spokok` double DEFAULT 0,
  `swajib` double DEFAULT 0,
  `ssukarela` double DEFAULT 0,
  `sberjangka` double DEFAULT 0,
  `alasan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
SQL);

        // Table: t_riwayat
        DB::unprepared(<<<'SQL'
CREATE TABLE `t_riwayat` (
  `id` int(11) NOT NULL,
  `uraian` text DEFAULT NULL,
  `usere` varchar(50) DEFAULT NULL,
  `tgl_updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: t_survey
        DB::unprepared(<<<'SQL'
CREATE TABLE `t_survey` (
  `nomor` varchar(50) DEFAULT NULL,
  `latitude` decimal(18,5) DEFAULT NULL,
  `longitude` decimal(18,5) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `kode` varchar(50) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `ket` text DEFAULT NULL,
  `folder` varchar(50) DEFAULT NULL,
  `posisi` varchar(50) DEFAULT NULL,
  `UserId` varchar(20) DEFAULT NULL,
  `GroupRpt` varchar(50) DEFAULT NULL,
  `TglUpdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
SQL);

        // Table: t_user
        DB::unprepared(<<<'SQL'
CREATE TABLE `t_user` (
  `username` varchar(300) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `real_name` varchar(300) DEFAULT NULL,
  `level` double DEFAULT NULL,
  `prop_id` varchar(108) DEFAULT NULL,
  `kab_id` varchar(108) DEFAULT NULL,
  `module` double DEFAULT NULL,
  `user_lastlogin` date DEFAULT NULL,
  `status` varchar(150) DEFAULT NULL,
  `id` double NOT NULL,
  `hak` varchar(405) DEFAULT NULL,
  `tgl_update` datetime DEFAULT NULL,
  `user_update` varchar(300) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `j_kel` varchar(90) DEFAULT NULL,
  `um_id` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: tangsur
        DB::unprepared(<<<'SQL'
CREATE TABLE `tangsur` (
  `Cabang` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Id` bigint(20) NOT NULL,
  `NoAng` int(11) DEFAULT NULL,
  `NoPinjam` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AngsuranKe` double DEFAULT NULL,
  `TglJTA` datetime DEFAULT NULL,
  `TglBayar` datetime DEFAULT NULL,
  `TglAkByr` datetime DEFAULT NULL,
  `JamByr` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `AngsuranPokok` int(11) DEFAULT 0,
  `AngsuranBunga` int(11) DEFAULT 0,
  `SisaNow` double DEFAULT 0,
  `Denda` double DEFAULT 0,
  `Terima` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT '0',
  `KetAng` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT '0',
  `TunggakKe` char(10) DEFAULT NULL,
  `TglUpdate` datetime DEFAULT NULL,
  `UpdateBy` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Closed` tinyint(1) DEFAULT 0,
  `CaraBayar` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Jml_Denda` double DEFAULT 0,
  `Hari_Denda` double DEFAULT 0,
  `Denda_PerHari` double DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: tbbkdt
        DB::unprepared(<<<'SQL'
CREATE TABLE `tbbkdt` (
  `Cabang` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ID` bigint(20) NOT NULL,
  `NOBBK` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `DEBET_ACC` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `JUMLAH` double DEFAULT NULL,
  `KDTRANS` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `TGLUPDATE` datetime DEFAULT NULL,
  `UPDATEBY` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: tbbkhd
        DB::unprepared(<<<'SQL'
CREATE TABLE `tbbkhd` (
  `Cabang` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `NOBBK` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `TGLBBK` datetime DEFAULT NULL,
  `CREDIT_ACC` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `KASIR` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `KET` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: tbkkdt
        DB::unprepared(<<<'SQL'
CREATE TABLE `tbkkdt` (
  `Cabang` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ID` bigint(20) NOT NULL,
  `NOBKK` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `DEBET_ACC` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `JUMLAH` double DEFAULT NULL,
  `KDTRANS` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `TGLUPDATE` datetime DEFAULT NULL,
  `UPDATEBY` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: tbkkhd
        DB::unprepared(<<<'SQL'
CREATE TABLE `tbkkhd` (
  `Cabang` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `NOBKK` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `TGLBKK` datetime DEFAULT NULL,
  `CREDIT_ACC` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `KASIR` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `KET` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: tbl_aruskas
        DB::unprepared(<<<'SQL'
CREATE TABLE `tbl_aruskas` (
  `Id` int(11) DEFAULT NULL,
  `KetId` varchar(100) DEFAULT NULL,
  `Grup` int(11) DEFAULT NULL,
  `KetSubGrup` varchar(100) DEFAULT NULL,
  `Nu` int(11) DEFAULT NULL,
  `Ket` varchar(100) DEFAULT NULL,
  `Acc1` varchar(30) DEFAULT NULL,
  `Acc2` varchar(30) DEFAULT NULL,
  `Jumlah` double NOT NULL,
  `Tipe` varchar(6) DEFAULT NULL,
  `Jumlah_mgt` double DEFAULT NULL,
  `Jumlah_pti` double DEFAULT NULL,
  `Jumlah_rfs` double DEFAULT NULL,
  `Jumlah_ryl` double DEFAULT NULL,
  `Jumlah_zam` double DEFAULT NULL,
  `Jumlah_lpdb` double DEFAULT NULL,
  `Cabang` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: tbl_aruskas_2
        DB::unprepared(<<<'SQL'
CREATE TABLE `tbl_aruskas_2` (
  `Id` int(11) NOT NULL,
  `KetId` varchar(100) DEFAULT NULL,
  `Grup` int(11) DEFAULT NULL,
  `KetSubGrup` varchar(100) DEFAULT NULL,
  `Nu` int(11) DEFAULT NULL,
  `Ket` varchar(100) DEFAULT NULL,
  `Acc1` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Acc2` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Jumlah` double DEFAULT NULL,
  `Tipe` varchar(6) DEFAULT NULL,
  `Jumlah_mgt` double DEFAULT NULL,
  `Jumlah_pti` double DEFAULT NULL,
  `Jumlah_rfs` double DEFAULT NULL,
  `Jumlah_ryl` double DEFAULT NULL,
  `Jumlah_zam` double DEFAULT NULL,
  `Jumlah_lpdb` double DEFAULT NULL,
  `Seq` decimal(18,0) NOT NULL,
  `aksi` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: tblgl_acc
        DB::unprepared(<<<'SQL'
CREATE TABLE `tblgl_acc` (
  `Seq` decimal(18,0) NOT NULL,
  `acc_code` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acc_type` varchar(10) DEFAULT NULL,
  `nu` int(11) DEFAULT NULL,
  `acc_desc` varchar(200) DEFAULT NULL,
  `Sub_Acc` varchar(30) DEFAULT NULL,
  `begBal` double DEFAULT NULL,
  `begBal_mgt` double DEFAULT 0,
  `begBal_pti` double DEFAULT 0,
  `begBal_rfs` double DEFAULT 0,
  `begBal_ryl` double DEFAULT 0,
  `status` smallint(6) DEFAULT NULL,
  `LogBank` tinyint(1) DEFAULT NULL,
  `LogCaraBayar` tinyint(1) DEFAULT NULL,
  `Header` tinyint(1) DEFAULT 0,
  `GroupRpt` varchar(100) DEFAULT NULL,
  `begbal_lpdb` double DEFAULT 0,
  `begbal_zam` double DEFAULT 0,
  `aksi` varchar(2) DEFAULT NULL,
  `bp` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: tblgl_acc_type
        DB::unprepared(<<<'SQL'
CREATE TABLE `tblgl_acc_type` (
  `acc_Id` varchar(10) NOT NULL,
  `acc_type` varchar(10) DEFAULT NULL,
  `acc_desc` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: tblgl_jnl
        DB::unprepared(<<<'SQL'
CREATE TABLE `tblgl_jnl` (
  `Cabang` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Id` bigint(20) NOT NULL,
  `jnl_no` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jnl_type` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jnl_date` datetime DEFAULT NULL,
  `jnl_desc` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `acc_code` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dbamt` double DEFAULT NULL,
  `cramt` double DEFAULT NULL,
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `TglUpdate` datetime DEFAULT NULL,
  `JNL_REF` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: tblgl_jnl_type
        DB::unprepared(<<<'SQL'
CREATE TABLE `tblgl_jnl_type` (
  `jnl_type_desc` varchar(100) DEFAULT NULL,
  `jnl_type` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: tblgl_rep_column
        DB::unprepared(<<<'SQL'
CREATE TABLE `tblgl_rep_column` (
  `rep_id` varchar(8) DEFAULT NULL,
  `rep_name` varchar(100) DEFAULT NULL,
  `section_id` varchar(10) DEFAULT NULL,
  `section_name` varchar(100) DEFAULT NULL,
  `section_head_id` varchar(10) DEFAULT NULL,
  `section_head_name` varchar(100) DEFAULT NULL,
  `column_id` varchar(10) DEFAULT NULL,
  `column_name` varchar(160) DEFAULT NULL,
  `from_acc` varchar(30) DEFAULT NULL,
  `to_acc` varchar(30) DEFAULT NULL,
  `saldoAwal` double DEFAULT 0,
  `saldoAkhir` double DEFAULT 0,
  `sk_mgt` double DEFAULT 0,
  `sk_pti` double DEFAULT 0,
  `sk_rfs` double DEFAULT 0,
  `sk_ryl` double DEFAULT 0,
  `status` int(11) DEFAULT 0,
  `Sk_LPDB` double DEFAULT 0,
  `Sk_Zam` double DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: tblgl_rep_format
        DB::unprepared(<<<'SQL'
CREATE TABLE `tblgl_rep_format` (
  `rep_id` varchar(4) DEFAULT NULL,
  `rep_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: tblgl_rep_section
        DB::unprepared(<<<'SQL'
CREATE TABLE `tblgl_rep_section` (
  `rep_id` varchar(4) DEFAULT NULL,
  `section_id` varchar(10) DEFAULT NULL,
  `section_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: tblgl_rep_section_head
        DB::unprepared(<<<'SQL'
CREATE TABLE `tblgl_rep_section_head` (
  `rep_id` varchar(8) DEFAULT NULL,
  `section_id` varchar(10) DEFAULT NULL,
  `section_head_id` varchar(10) DEFAULT NULL,
  `section_head_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: tbltmpgl
        DB::unprepared(<<<'SQL'
CREATE TABLE `tbltmpgl` (
  `acc_code` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `acc_type` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `acc_desc` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jnl_no` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jnl_type` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jnl_desc` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `periode` datetime DEFAULT NULL,
  `begbal` double DEFAULT NULL,
  `dbAmt` double DEFAULT NULL,
  `crAmt` double DEFAULT NULL,
  `totalx` double DEFAULT NULL,
  `UserId` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `GroupRpt` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `TglUpdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: tbunga
        DB::unprepared(<<<'SQL'
CREATE TABLE `tbunga` (
  `Periode` date DEFAULT NULL,
  `NoKTP` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `NoAnggota` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `NmAnggota` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `NoSimpan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `KdTrans` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Persen_Bunga` double DEFAULT 0,
  `Tgl1` date DEFAULT NULL,
  `Tgl2` date DEFAULT NULL,
  `Hari` bigint(20) DEFAULT 0,
  `Saldo` double DEFAULT 0,
  `Bunga` double DEFAULT 0,
  `Posted` tinyint(1) DEFAULT 0,
  `UserId` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `TglProses` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Id_SimpanDt` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: temp_anggota
        DB::unprepared(<<<'SQL'
CREATE TABLE `temp_anggota` (
  `Bulan` varchar(2) NOT NULL,
  `Cabang` varchar(20) NOT NULL,
  `JK` varchar(20) DEFAULT NULL,
  `NOAGT` varchar(20) DEFAULT NULL,
  `NOKTP` varchar(20) NOT NULL,
  `AWAL` int(12) DEFAULT 0,
  `MASUK` int(12) DEFAULT 0,
  `KELUAR` int(12) DEFAULT 0,
  `BLN` varchar(20) NOT NULL,
  `THN` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: temp_angsurpin_bln
        DB::unprepared(<<<'SQL'
CREATE TABLE `temp_angsurpin_bln` (
  `Bulan` varchar(2) NOT NULL,
  `NamaBulan` varchar(20) DEFAULT NULL,
  `Lalu` double DEFAULT 0,
  `Baru` double DEFAULT NULL,
  `ppjg` double DEFAULT NULL,
  `Lunas` double DEFAULT NULL,
  `Nunggak` double DEFAULT NULL,
  `JmlPinjaman` double DEFAULT NULL,
  `Tabungan` double DEFAULT NULL,
  `SisaPLama` double DEFAULT NULL,
  `PinjamanBaru` double DEFAULT NULL,
  `AdmPinjamanBaru` double DEFAULT NULL,
  `AngsurPokok` double DEFAULT NULL,
  `AngsurBunga` double DEFAULT NULL,
  `Denda` double DEFAULT NULL,
  `SisaAkhir` double DEFAULT NULL,
  `UserId` varchar(100) DEFAULT NULL,
  `Jml` double DEFAULT 0,
  `NsbThnLalu` double DEFAULT 0,
  `BiayaUsaha` double DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: temp_aruskas
        DB::unprepared(<<<'SQL'
CREATE TABLE `temp_aruskas` (
  `id` int(11) NOT NULL,
  `Cabang` varchar(15) DEFAULT NULL,
  `BLN` int(11) DEFAULT 0,
  `NAMABULAN` varchar(100) DEFAULT NULL,
  `THN` varchar(4) DEFAULT NULL,
  `KAS` decimal(18,0) NOT NULL DEFAULT 0,
  `BANK` decimal(18,0) NOT NULL DEFAULT 0,
  `SISAP` decimal(18,0) NOT NULL DEFAULT 0,
  `USERID` varchar(100) DEFAULT NULL,
  `ANGSURANPOKOK` decimal(18,0) DEFAULT 0,
  `SIMP` decimal(18,0) DEFAULT 0,
  `HUTANGDITERIMA` decimal(18,0) DEFAULT 0,
  `ZPENDAPATAN` decimal(18,0) DEFAULT 0,
  `PINJAMAN` decimal(18,0) DEFAULT 0,
  `ZPENARIKAN` decimal(18,0) DEFAULT 0,
  `ZBUNGASIMPANAN` decimal(18,0) DEFAULT 0,
  `ANGSURANHUTANG` decimal(18,0) DEFAULT 0,
  `ZBIAYA` decimal(18,0) DEFAULT 0,
  `SaldoKas` decimal(18,0) DEFAULT 0,
  `SaldoBank` decimal(18,0) DEFAULT 0,
  `SaldoPinjaman` decimal(18,0) DEFAULT 0,
  `Modal` decimal(18,0) DEFAULT 0,
  `PTT` double(15,2) NOT NULL,
  `PAC` double(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: temp_cashflow
        DB::unprepared(<<<'SQL'
CREATE TABLE `temp_cashflow` (
  `bln` varchar(2) NOT NULL DEFAULT '',
  `nmbulan` varchar(20) DEFAULT NULL,
  `tahun` varchar(4) NOT NULL,
  `InPokok` double DEFAULT NULL,
  `InBunga` double DEFAULT NULL,
  `InAdmin` double DEFAULT NULL,
  `InProvisi` double DEFAULT NULL,
  `InSurvey` double DEFAULT NULL,
  `InDenda` double DEFAULT NULL,
  `InJasaBank` double DEFAULT NULL,
  `InLain` double DEFAULT NULL,
  `SimpananPokok` double DEFAULT NULL,
  `SimpananWajib` double DEFAULT NULL,
  `SimpananSukarela` double DEFAULT NULL,
  `SimpananBerjangka` double DEFAULT NULL,
  `InPihak3` double DEFAULT NULL,
  `TarikPokok` double DEFAULT NULL,
  `TarikWajib` double DEFAULT NULL,
  `TarikSukarela` double DEFAULT NULL,
  `TarikBerjangka` double DEFAULT NULL,
  `JmlPinjaman` double DEFAULT NULL,
  `AngsuranBank` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: temp_daftar_realang_pinjaman
        DB::unprepared(<<<'SQL'
CREATE TABLE `temp_daftar_realang_pinjaman` (
  `Cabang` varchar(5) DEFAULT NULL,
  `NoKTP` varchar(25) DEFAULT NULL,
  `NoPinjam` varchar(15) DEFAULT NULL,
  `TglPinjam` datetime DEFAULT NULL,
  `TglJTA` varchar(15) DEFAULT NULL,
  `NmPeminjam` varchar(100) DEFAULT NULL,
  `AlamatP` varchar(200) DEFAULT NULL,
  `Penagih` varchar(50) DEFAULT NULL,
  `JmlPinjaman` double DEFAULT NULL,
  `SisaP` double DEFAULT NULL,
  `JmlAngsur` double DEFAULT NULL,
  `JmlBunga` double DEFAULT NULL,
  `JmlDenda` double DEFAULT NULL,
  `AngsuranKe` double DEFAULT NULL,
  `Hapus` varchar(2) DEFAULT NULL,
  `Id` int(11) NOT NULL,
  `UserId` varchar(100) DEFAULT NULL,
  `TglBayar` datetime DEFAULT NULL,
  `AngsuranPokok` double DEFAULT 0,
  `AngsuranBunga` double DEFAULT 0,
  `ByrPokokYLalu` double DEFAULT NULL,
  `ByrBungaYLalu` double DEFAULT NULL,
  `TERIMA` varchar(100) DEFAULT NULL,
  `TunggakKe` char(10) DEFAULT NULL,
  `JW` int(11) DEFAULT NULL,
  `KdBunga` varchar(5) DEFAULT NULL,
  `bunga` double(15,2) DEFAULT 0.00,
  `SelesaiAng` date DEFAULT NULL,
  `dateupdated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: temp_daftar_tagihan_angsuran_pinjaman
        DB::unprepared(<<<'SQL'
CREATE TABLE `temp_daftar_tagihan_angsuran_pinjaman` (
  `NoPinjam` varchar(100) DEFAULT NULL,
  `TglPinjam` datetime DEFAULT NULL,
  `NmPeminjam` varchar(100) DEFAULT NULL,
  `AlamatP` varchar(200) DEFAULT NULL,
  `Penagih` varchar(100) DEFAULT NULL,
  `JmlPinjaman` double DEFAULT NULL,
  `SisaP` double DEFAULT NULL,
  `JmlAngsur` double DEFAULT NULL,
  `JmlBunga` double DEFAULT NULL,
  `JmlDenda` double DEFAULT NULL,
  `AngsuranKe` double DEFAULT NULL,
  `Hapus` varchar(2) DEFAULT NULL,
  `Id` int(11) NOT NULL,
  `UserId` varchar(100) DEFAULT NULL,
  `TglBayar` datetime DEFAULT NULL,
  `AngsuranPokok` double DEFAULT 0,
  `AngsuranBunga` double DEFAULT 0,
  `TERIMA` varchar(100) DEFAULT NULL,
  `TunggakKe` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: temp_daftar_tagihan_angsuran_pinjaman1
        DB::unprepared(<<<'SQL'
CREATE TABLE `temp_daftar_tagihan_angsuran_pinjaman1` (
  `Cabang` varchar(15) DEFAULT NULL,
  `NoKTP` varchar(75) DEFAULT NULL,
  `NoPinjam` varchar(50) DEFAULT NULL,
  `TglPinjam` datetime DEFAULT NULL,
  `TglJTA` varchar(45) DEFAULT NULL,
  `NmPeminjam` varchar(300) DEFAULT NULL,
  `AlamatP` varchar(600) DEFAULT NULL,
  `Penagih` varchar(150) DEFAULT NULL,
  `JmlPinjaman` double DEFAULT NULL,
  `SisaP` double DEFAULT NULL,
  `JmlAngsur` double DEFAULT NULL,
  `JmlBunga` double DEFAULT NULL,
  `JmlDenda` double DEFAULT NULL,
  `AngsuranKe` double DEFAULT NULL,
  `Hapus` varchar(6) DEFAULT NULL,
  `Id` double DEFAULT NULL,
  `UserId` varchar(300) DEFAULT NULL,
  `TglBayar` datetime DEFAULT NULL,
  `AngsuranPokok` double DEFAULT NULL,
  `AngsuranBunga` double DEFAULT NULL,
  `TERIMA` varchar(300) DEFAULT NULL,
  `TunggakKe` varchar(30) DEFAULT NULL,
  `JW` double DEFAULT NULL,
  `KdBunga` varchar(15) DEFAULT NULL,
  `bunga` double DEFAULT NULL,
  `SelesaiAng` date DEFAULT NULL,
  `dateupdated` datetime DEFAULT NULL,
  `pinjambaru` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
SQL);

        // Table: temp_dasboard_real
        DB::unprepared(<<<'SQL'
CREATE TABLE `temp_dasboard_real` (
  `bln` varchar(2) NOT NULL DEFAULT '',
  `nmbulan` varchar(20) DEFAULT NULL,
  `tahun` varchar(4) NOT NULL,
  `JmlPinjaman` double DEFAULT NULL,
  `AngsuranPokok` int(11) DEFAULT NULL,
  `AngsuranBunga` int(11) DEFAULT NULL,
  `Denda` int(11) DEFAULT NULL,
  `SisaNow` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: temp_kolek
        DB::unprepared(<<<'SQL'
CREATE TABLE `temp_kolek` (
  `BLN` int(11) DEFAULT 0,
  `TAHUN` varchar(4) NOT NULL,
  `CABANG` varchar(10) NOT NULL,
  `NAMABULAN` varchar(100) DEFAULT NULL,
  `RP_LUNAS` double NOT NULL,
  `ORANG_LUNAS` double NOT NULL,
  `RP_PJMBARU` double NOT NULL,
  `ORANG_PJMBARU` double NOT NULL,
  `RP_L` double DEFAULT 0,
  `ORANG_L` double DEFAULT 0,
  `PERSEN_L` double DEFAULT 0,
  `RP_KL` double DEFAULT 0,
  `ORANG_KL` double DEFAULT 0,
  `PERSEN_KL` double DEFAULT 0,
  `RP_D` double DEFAULT 0,
  `ORANG_D` double DEFAULT 0,
  `PERSEN_D` double DEFAULT 0,
  `RP_M` double DEFAULT 0,
  `ORANG_M` double DEFAULT 0,
  `PERSEN_M` double DEFAULT 0,
  `SISAP` double DEFAULT 0,
  `JML_ORANG` double DEFAULT 0,
  `KOLEK` varchar(4) DEFAULT NULL,
  `USERID` varchar(100) DEFAULT NULL,
  `RP_PK` double DEFAULT 0,
  `ORANG_PK` double DEFAULT 0,
  `PERSEN_PK` double DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
SQL);

        // Table: temp_kolek_dtl
        DB::unprepared(<<<'SQL'
CREATE TABLE `temp_kolek_dtl` (
  `Id` decimal(18,0) NOT NULL,
  `NoPinjam` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `AngsuranKe` double DEFAULT NULL,
  `TglJTA` datetime DEFAULT NULL,
  `TglBayar` datetime DEFAULT NULL,
  `TglAkByr` datetime DEFAULT NULL,
  `JmlPinjaman` double DEFAULT 0,
  `SisaP` double DEFAULT 0,
  `SisaNow` double DEFAULT 0,
  `LamaAngsur` double DEFAULT 0,
  `TotalPokok` double DEFAULT 0,
  `Bunga` double DEFAULT 0,
  `TunggakKe` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
SQL);

        // Table: temp_kolektor_bln
        DB::unprepared(<<<'SQL'
CREATE TABLE `temp_kolektor_bln` (
  `Kolektor` varchar(50) DEFAULT NULL,
  `n_baru` int(11) DEFAULT 0,
  `pinjaman_baru` double DEFAULT 0,
  `n_ppj` int(11) DEFAULT 0,
  `pinjaman_ppj` double DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: temp_neraca
        DB::unprepared(<<<'SQL'
CREATE TABLE `temp_neraca` (
  `nu` decimal(12,0) DEFAULT NULL,
  `acc_code` varchar(60) DEFAULT NULL,
  `acc_type` varchar(60) DEFAULT NULL,
  `acc_desc` varchar(600) DEFAULT NULL,
  `jumlah` double DEFAULT NULL,
  `bulan` varchar(30) DEFAULT NULL,
  `tahun` varchar(12) DEFAULT NULL,
  `UserId` varchar(300) DEFAULT NULL,
  `GroupRpt` varchar(300) DEFAULT NULL,
  `TglUpdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
SQL);

        // Table: temp_nunggak2
        DB::unprepared(<<<'SQL'
CREATE TABLE `temp_nunggak2` (
  `NoPinjam` varchar(20) DEFAULT NULL,
  `TglPinjam` datetime DEFAULT NULL,
  `NmPeminjam` varchar(100) DEFAULT NULL,
  `JmlPinjaman` double DEFAULT NULL,
  `SisaP` double DEFAULT NULL,
  `JmlAngsur` double DEFAULT NULL,
  `JmlBunga` double DEFAULT NULL,
  `SisaNow` double DEFAULT NULL,
  `AngsuranKe` double DEFAULT NULL,
  `Penagih` varchar(100) DEFAULT NULL,
  `TotalBunga` double DEFAULT NULL,
  `AlamatP` varchar(200) DEFAULT NULL,
  `UserId` varchar(100) DEFAULT NULL,
  `Kolek` varchar(4) DEFAULT NULL,
  `NunggakBunga` int(11) DEFAULT NULL,
  `TglLunas` datetime DEFAULT NULL,
  `LamaAngsur` double DEFAULT 0,
  `Bunga` double DEFAULT 0,
  `TglJTA` date DEFAULT NULL,
  `TotalPokok` double DEFAULT 0,
  `SisaPinjaman` double DEFAULT 0,
  `N_POKOK` double DEFAULT 0,
  `N_BUNGA` double DEFAULT 0,
  `N_DENDA` double DEFAULT 0,
  `NoKTP` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: temp_pendapatanusaha
        DB::unprepared(<<<'SQL'
CREATE TABLE `temp_pendapatanusaha` (
  `Cabang` varchar(15) DEFAULT NULL,
  `BLN` int(11) DEFAULT 0,
  `NAMABULAN` varchar(100) DEFAULT NULL,
  `THN` varchar(4) DEFAULT NULL,
  `SALDOAWAL` decimal(18,0) DEFAULT 0,
  `TARGET_BUNGA` decimal(18,0) NOT NULL DEFAULT 0,
  `PINJAMAN_BARU` decimal(18,0) NOT NULL DEFAULT 0,
  `SISAP` decimal(18,0) NOT NULL DEFAULT 0,
  `USERID` varchar(100) DEFAULT NULL,
  `PEND_BUNGA` decimal(18,0) DEFAULT 0,
  `PEND_ADMIN` decimal(18,0) DEFAULT 0,
  `PEND_PROVISI` decimal(18,0) DEFAULT 0,
  `PEND_SURVEY` decimal(18,0) DEFAULT 0,
  `PEND_DENDA` decimal(18,0) DEFAULT 0,
  `PEND_LAIN` decimal(18,0) DEFAULT 0,
  `BIAYA` decimal(18,0) DEFAULT 0,
  `Modal` decimal(18,0) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: temp_pinjam_angsur
        DB::unprepared(<<<'SQL'
CREATE TABLE `temp_pinjam_angsur` (
  `NoPinjam` varchar(40) NOT NULL,
  `Kolek` varchar(40) DEFAULT NULL,
  `Bln` varchar(2) NOT NULL,
  `Thn` varchar(4) NOT NULL,
  `JmlPinjaman` double DEFAULT 0,
  `JmlAngPokokBlLalu` double DEFAULT 0,
  `AngsuranPokokBlIni` double DEFAULT 0,
  `JmlAngBunga` double DEFAULT 0,
  `SisaP` double DEFAULT 0,
  `SisaNow` double DEFAULT 0,
  `UserId` varchar(100) DEFAULT NULL,
  `Pokok` double DEFAULT 0,
  `Bunga` double DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: temp_saldo_simp
        DB::unprepared(<<<'SQL'
CREATE TABLE `temp_saldo_simp` (
  `NoSimpan` varchar(20) DEFAULT NULL,
  `SaldoS01` double DEFAULT NULL,
  `SaldoS02` double DEFAULT NULL,
  `SaldoS03` double DEFAULT NULL,
  `SaldoS04` double DEFAULT NULL,
  `TtlSaldo` double DEFAULT NULL,
  `NoKTP` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: temp_shu
        DB::unprepared(<<<'SQL'
CREATE TABLE `temp_shu` (
  `nu` decimal(12,0) DEFAULT NULL,
  `acc_code` varchar(60) DEFAULT NULL,
  `acc_desc` varchar(100) DEFAULT NULL,
  `debet` double DEFAULT NULL,
  `credit` double DEFAULT NULL,
  `bulan` varchar(30) DEFAULT NULL,
  `tahun` varchar(12) DEFAULT NULL,
  `UserId` varchar(20) DEFAULT NULL,
  `GroupRpt` varchar(50) DEFAULT NULL,
  `TglUpdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
SQL);

        // Table: temp_simpananpokokwajib
        DB::unprepared(<<<'SQL'
CREATE TABLE `temp_simpananpokokwajib` (
  `id` bigint(20) NOT NULL,
  `Tahun` int(11) NOT NULL,
  `Bulan` int(11) NOT NULL,
  `NoAnggota` varchar(50) NOT NULL,
  `OrgAwalPokok` int(11) DEFAULT 0,
  `SaldoAwalPokok` decimal(18,2) DEFAULT 0.00,
  `OrgSetorPokok` int(11) DEFAULT 0,
  `SetorPokok` decimal(18,2) DEFAULT 0.00,
  `OrgTarikPokok` int(11) DEFAULT 0,
  `TarikPokok` decimal(18,2) DEFAULT 0.00,
  `SaldoAkhirPokok` decimal(18,2) DEFAULT 0.00,
  `OrgAwalWajib` int(11) DEFAULT 0,
  `SaldoAwalWajib` decimal(18,2) DEFAULT 0.00,
  `OrgSetorWajib` decimal(18,2) DEFAULT 0.00,
  `SetorWajib` decimal(18,2) DEFAULT 0.00,
  `OrgTarikWajib` decimal(18,2) DEFAULT 0.00,
  `TarikWajib` decimal(18,2) DEFAULT 0.00,
  `SaldoAkhirWajib` decimal(18,2) DEFAULT 0.00,
  `OrgAwalSS` int(11) DEFAULT 0,
  `SaldoAwalSS` decimal(18,2) DEFAULT 0.00,
  `OrgSetorSS` int(11) DEFAULT 0,
  `SetorSS` decimal(18,2) DEFAULT 0.00,
  `OrgTarikSS` int(11) DEFAULT 0,
  `TarikSS` decimal(18,2) DEFAULT 0.00,
  `OrgAwalBerjangka` int(11) DEFAULT 0,
  `SaldoAwalBerjangka` decimal(18,2) DEFAULT 0.00,
  `OrgSetorBerjangka` int(11) DEFAULT 0,
  `SetorBerjangka` decimal(18,2) DEFAULT 0.00,
  `OrgTarikBerjangka` int(11) DEFAULT 0,
  `TarikBerjangka` decimal(18,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: temporer_targetrealisasi
        DB::unprepared(<<<'SQL'
CREATE TABLE `temporer_targetrealisasi` (
  `Tahun` smallint(6) NOT NULL,
  `Bulan` tinyint(4) NOT NULL,
  `JlhPinjam` int(11) DEFAULT 0,
  `JlhOrgJta` int(11) DEFAULT 0,
  `JlhNoPinjamReal` int(11) DEFAULT NULL,
  `AngsuranPokok` decimal(18,2) DEFAULT 0.00,
  `AngsuranBunga` decimal(18,2) DEFAULT 0.00,
  `JmlOrgNunggak` int(11) DEFAULT 0,
  `TunggakPokok` decimal(18,2) DEFAULT 0.00,
  `TunggakBunga` decimal(18,2) DEFAULT 0.00,
  `JlhNoPinjam` int(11) DEFAULT 0,
  `JmlPinjaman` decimal(18,2) DEFAULT 0.00,
  `NilaiJTAPokok` decimal(18,2) DEFAULT 0.00,
  `NilaiJTABunga` decimal(18,2) DEFAULT 0.00,
  `JmlOrgLunas` int(11) DEFAULT 0,
  `PokokLunas` decimal(18,2) DEFAULT 0.00,
  `BungaLunas` decimal(18,2) DEFAULT 0.00,
  `JlhOrangTargetPokok` int(11) DEFAULT NULL,
  `TargetPokok` decimal(18,2) DEFAULT 0.00,
  `TargetBunga` decimal(18,2) DEFAULT 0.00,
  `JlhOrangSaldoAwal` int(11) DEFAULT 0,
  `SaldoAwal` decimal(18,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: tpinjam
        DB::unprepared(<<<'SQL'
CREATE TABLE `tpinjam` (
  `Cabang` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `NoPinjam` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoKTP` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NoKontrak` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `NmPeminjam` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `AlamatP` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Telp` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `TglPinjam` datetime DEFAULT NULL,
  `JamPinjam` varchar(0) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `JmlPinjaman` double DEFAULT 0,
  `KdBunga` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Bunga` double DEFAULT 0,
  `JmlBunga` double DEFAULT 0,
  `Admin` double DEFAULT 0,
  `ByAdmin` double DEFAULT 0,
  `Tabungan` double DEFAULT 0,
  `MulaiAng` datetime DEFAULT NULL,
  `SelesaiAng` datetime DEFAULT NULL,
  `LamaAngsur` double DEFAULT 0,
  `LamaAktual` double DEFAULT 0,
  `JmlAngsur` double DEFAULT 0,
  `Justment` double DEFAULT 0,
  `SisaP` double DEFAULT NULL,
  `Jaminan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Refrensi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Keterangan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Penagih` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `TglTrkTab` datetime DEFAULT NULL,
  `TrkTab` double DEFAULT NULL,
  `Dana` double DEFAULT NULL,
  `Kategori` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Tujuan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `TglLunas` datetime DEFAULT NULL,
  `TotalPokok` double DEFAULT 0,
  `TotalBunga` double DEFAULT 0,
  `TglUpdate` datetime DEFAULT NULL,
  `UpdateBy` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `AngsuranKe` bigint(20) DEFAULT 0,
  `JenisPinjaman` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `SimpananPokok` double DEFAULT 0,
  `SimpananWajib` double DEFAULT 0,
  `Persen_Denda` double DEFAULT 0,
  `Toleransi_Denda` int(11) DEFAULT 0,
  `NilaiJaminan` double DEFAULT 0,
  `Provisi` double DEFAULT 0,
  `ByProvisi` double DEFAULT 0,
  `Survey` double DEFAULT 0,
  `BySurvey` double DEFAULT 0,
  `Tgl_Penyerahan` datetime DEFAULT NULL,
  `Yang_Menyerahkan` varchar(50) DEFAULT NULL,
  `Yang_Menerima` varchar(50) DEFAULT NULL,
  `Pelunasan` double DEFAULT 0,
  `posting` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: tsimpandt
        DB::unprepared(<<<'SQL'
CREATE TABLE `tsimpandt` (
  `Cabang` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Id` int(11) NOT NULL,
  `NoSimpan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TglTrans` datetime DEFAULT NULL,
  `JamSimp` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `KdTrans` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Bunga` double DEFAULT 0,
  `Jumlah` int(11) DEFAULT 0,
  `Kasir` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `KetSimp` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `TglUpdate` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `UpdateBy` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Closed` tinyint(1) DEFAULT 0,
  `NoSimpan_Lama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Tarik` int(11) DEFAULT NULL,
  `Saldo` double DEFAULT 0,
  `LogS04_Aktif` tinyint(1) DEFAULT 0,
  `Tenor` double DEFAULT 0,
  `SisaTenor` double DEFAULT 0,
  `Persen_Bunga` double DEFAULT 0,
  `Id_SimpanDt` double DEFAULT 0,
  `JatuhTempo` datetime DEFAULT NULL,
  `LastProcess` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

        // Table: tsimpanhd
        DB::unprepared(<<<'SQL'
CREATE TABLE `tsimpanhd` (
  `id` int(11) NOT NULL,
  `Cabang` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `NoSimpan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoKTP` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NmDebitur` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `TglBuka` datetime DEFAULT NULL,
  `SisaS` double DEFAULT 0,
  `TglKeluar` datetime DEFAULT NULL,
  `Alasan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Keterangan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `NoSimpan_Lama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
SQL);

    }

    public function down(): void
    {
        DB::statement("SET FOREIGN_KEY_CHECKS=0");
        DB::statement("DROP TABLE IF EXISTS `tsimpanhd`");
        DB::statement("DROP TABLE IF EXISTS `tsimpandt`");
        DB::statement("DROP TABLE IF EXISTS `tpinjam`");
        DB::statement("DROP TABLE IF EXISTS `temporer_targetrealisasi`");
        DB::statement("DROP TABLE IF EXISTS `temp_simpananpokokwajib`");
        DB::statement("DROP TABLE IF EXISTS `temp_shu`");
        DB::statement("DROP TABLE IF EXISTS `temp_saldo_simp`");
        DB::statement("DROP TABLE IF EXISTS `temp_pinjam_angsur`");
        DB::statement("DROP TABLE IF EXISTS `temp_pendapatanusaha`");
        DB::statement("DROP TABLE IF EXISTS `temp_nunggak2`");
        DB::statement("DROP TABLE IF EXISTS `temp_neraca`");
        DB::statement("DROP TABLE IF EXISTS `temp_kolektor_bln`");
        DB::statement("DROP TABLE IF EXISTS `temp_kolek_dtl`");
        DB::statement("DROP TABLE IF EXISTS `temp_kolek`");
        DB::statement("DROP TABLE IF EXISTS `temp_dasboard_real`");
        DB::statement("DROP TABLE IF EXISTS `temp_daftar_tagihan_angsuran_pinjaman1`");
        DB::statement("DROP TABLE IF EXISTS `temp_daftar_tagihan_angsuran_pinjaman`");
        DB::statement("DROP TABLE IF EXISTS `temp_daftar_realang_pinjaman`");
        DB::statement("DROP TABLE IF EXISTS `temp_cashflow`");
        DB::statement("DROP TABLE IF EXISTS `temp_aruskas`");
        DB::statement("DROP TABLE IF EXISTS `temp_angsurpin_bln`");
        DB::statement("DROP TABLE IF EXISTS `temp_anggota`");
        DB::statement("DROP TABLE IF EXISTS `tbunga`");
        DB::statement("DROP TABLE IF EXISTS `tbltmpgl`");
        DB::statement("DROP TABLE IF EXISTS `tblgl_rep_section_head`");
        DB::statement("DROP TABLE IF EXISTS `tblgl_rep_section`");
        DB::statement("DROP TABLE IF EXISTS `tblgl_rep_format`");
        DB::statement("DROP TABLE IF EXISTS `tblgl_rep_column`");
        DB::statement("DROP TABLE IF EXISTS `tblgl_jnl_type`");
        DB::statement("DROP TABLE IF EXISTS `tblgl_jnl`");
        DB::statement("DROP TABLE IF EXISTS `tblgl_acc_type`");
        DB::statement("DROP TABLE IF EXISTS `tblgl_acc`");
        DB::statement("DROP TABLE IF EXISTS `tbl_aruskas_2`");
        DB::statement("DROP TABLE IF EXISTS `tbl_aruskas`");
        DB::statement("DROP TABLE IF EXISTS `tbkkhd`");
        DB::statement("DROP TABLE IF EXISTS `tbkkdt`");
        DB::statement("DROP TABLE IF EXISTS `tbbkhd`");
        DB::statement("DROP TABLE IF EXISTS `tbbkdt`");
        DB::statement("DROP TABLE IF EXISTS `tangsur`");
        DB::statement("DROP TABLE IF EXISTS `t_user`");
        DB::statement("DROP TABLE IF EXISTS `t_survey`");
        DB::statement("DROP TABLE IF EXISTS `t_riwayat`");
        DB::statement("DROP TABLE IF EXISTS `tAgtOut`");
        DB::statement("DROP TABLE IF EXISTS `periode_thn`");
        DB::statement("DROP TABLE IF EXISTS `periode`");
        DB::statement("DROP TABLE IF EXISTS `mtenor`");
        DB::statement("DROP TABLE IF EXISTS `mkdtrans`");
        DB::statement("DROP TABLE IF EXISTS `mkategori_pinjaman`");
        DB::statement("DROP TABLE IF EXISTS `mdana`");
        DB::statement("DROP TABLE IF EXISTS `mcolector`");
        DB::statement("DROP TABLE IF EXISTS `mcabang`");
        DB::statement("DROP TABLE IF EXISTS `mbunga`");
        DB::statement("DROP TABLE IF EXISTS `manggota`");
        DB::statement("SET FOREIGN_KEY_CHECKS=1");
    }
};
