select DISTINCT tb_mahasiswa.mhs_nama, tb_matakuliah.mk_kode,MAX(tb_mahasiswa_nilai.nilai)
from tb_mahasiswa_nilai
JOIN tb_mahasiswa ON tb_mahasiswa.mhs_id = tb_mahasiswa_nilai.mhs_id
JOIN tb_matakuliah ON tb_matakuliah.mk_id = tb_mahasiswa_nilai.mk_id
WHERE tb_matakuliah.mk_kode = "MK303"
ORDER BY tb_mahasiswa_nilai.nilai DESC limit 1