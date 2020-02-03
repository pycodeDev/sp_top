<?php
if (!defined('BASEPATH')) exit('No Direct Script Allowed');

class Topsis_lib
{
    public function alg($data){
        for ($i=0; $i < count($data); $i++) { 
            // $b=[];
            for ($j=0; $j < count($data[$i]); $j++) { 
                $a = $data[$i][$j]/$this->normalisasi($data,$j);
                $b[] = $a;
            }
            $r[] = $b;
            unset($b);
        }

        for ($f=0; $f < count($r); $f++) { 
            $aa = $this->mat_ter($r[$f]);
            $bb[] = $aa;
        }

        for ($xx=0; $xx < count($bb[0]); $xx++) { 
            $max[] = $this->get_max($bb,$xx);
            $min[] = $this->get_min($bb,$xx);
        }

        for ($yy=0; $yy < count($bb); $yy++) { 
            $nip[] = $this->positif($bb[$yy],$max);
            $nin[] = $this->negatif($bb[$yy],$min);
        }

        for ($iii=0; $iii < count($bb); $iii++) { 
            $hh[] = $nin[$iii]/($nin[$iii]+$nip[$iii]);
        }

        return $hh;
    }

    public function normalisasi($n,$idx){
        $a=0;
        for ($i=0; $i < count($n); $i++) { 
            $a = $a + pow($n[$i][$idx],2);
        }
        $hasil = sqrt($a);
        return $hasil;
    }

    public function mat_ter($data){
        $w = [5,4,3,4];
        for ($i=0; $i < count($w); $i++) { 
            $hasil[] = $w[$i] * $data[$i];
        }
        return $hasil;
    }

    public function get_max($a,$idx){
        $hasil=[];
        for ($i=0; $i < count($a); $i++) { 
            array_push($hasil,array($a[$i][$idx]));
        }
        return max($hasil);
    }
    
    public function get_min($a,$idx){
        $hasil=[];
        for ($i=0; $i < count($a); $i++) { 
            array_push($hasil,array($a[$i][$idx]));
        }
        return min($hasil);
    }

    public function positif($a,$b){
        $hasil = 0;
        for ($i=0; $i < count($a); $i++) { 
            $hasil = $hasil+pow($b[$i][0]-$a[$i],2);
        }

        return sqrt($hasil);
    }
    
    public function negatif($a,$b){
        $hasil = 0;
        for ($i=0; $i < count($a); $i++) { 
            $hasil = $hasil+pow($a[$i]-$b[$i][0],2);
        }

        return sqrt($hasil);
    }

}