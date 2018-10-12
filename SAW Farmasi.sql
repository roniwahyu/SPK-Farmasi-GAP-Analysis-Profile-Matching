SELECT
a.alternatif,
a.nama,
a.batch,
if(a.C1>=0 and a.C1<8,1,(if(a.C1>=8 and a.C1<15,2,if(a.C1>=15 and a.C1<23,3,if(a.C1>=23 and a.C1<=30,4,0))))) as C1,
if(a.C2>=0 and a.C2<8,1,(if(a.C2>=8 and a.C2<15,2,if(a.C2>=15 and a.C2<23,3,if(a.C2>=23 and a.C2<=30,4,0))))) as C2,
if(a.C3>=3.1 and a.C3<4.1,1,(if(a.C3>=4.1 and a.C3<5.1,2,if(a.C3>=5.1 and a.C3<6.1,3,if(a.C3>=6.1 and a.C3<=7,4,0))))) as C3,
if(a.C4>=0 and a.C4<1000,1,(if(a.C4>=1000 and a.C4<1500,2,if(a.C4>=1500 and a.C4<2000,3,if(a.C4>=2000 and a.C4<=3000,4,0))))) as C4,
if(a.C5>=0 and a.C5<8,1,(if(a.C5>=8 and a.C5<8.5,2,if(a.C5>=8.5 and a.C5<9,3,if(a.C5>=9 and a.C5<=10,4,0))))) as C5,
if(a.C6>10,1,(if(a.C6<=10,4,0))) as C6,
a.id_alternatif,
a.id_batch,
a.id_produk
FROM
`00-view-penilaian-kriteria` AS a


SELECT
a.alternatif,
a.nama,
a.batch,
max(a.C1) as maxc1,
max(a.C2) as maxc2,
max(a.C3) as maxc3,
max(a.C4) as maxc4,
max(a.C5) as maxc5,
max(a.C6) as maxc6,
a.id_alternatif,
a.id_batch,
a.id_produk
FROM
`01-view-rating-saw` AS a

a.C1/b.maxc1 as nc1,
a.C2/b.maxc2 as nc2,
a.C3/b.maxc3 as nc3,
a.C4/b.maxc4 as nc4,
a.C5/b.maxc5 as nc5,
a.C6/b.maxc6 as nc6

a.nc1*b.maxc1 as wc1,
a.nc2*b.maxc2 as wc2,
a.nc3*b.maxc3 as wc3,
a.nc4*b.maxc4 as wc4,
a.nc5*b.maxc5 as wc5,
a.nc6*b.maxc6 as wc6,

SELECT
a.alternatif,
a.nama,
a.batch,
sum(if(a.gapc1=b.selisih,b.bobot,0)) as wc1,
sum(if(a.gapc2=b.selisih,b.bobot,0)) as wc2,
sum(if(a.gapc3=b.selisih,b.bobot,0)) as wc3,
sum(if(a.gapc4=b.selisih,b.bobot,0)) as wc4,
sum(if(a.gapc5=b.selisih,b.bobot,0)) as wc5,
sum(if(a.gapc6=b.selisih,b.bobot,0)) as wc6,
a.id_alternatif,
a.id_batch,
a.id_produk,
b.standar_gap,
b.kriteria,
b.kode,
b.id
FROM
`03-view-normalisasi-saw` AS a ,
`00-view-bobot-saw` AS b
