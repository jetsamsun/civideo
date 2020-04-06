<?php
/**
 * Created by PhpStorm.
 * User: navy
 * Date: 2020/2/25
 * Time: 17:22
 */

function pagination($url,$pages,$total,$limit,$offset,$page) {
    if($pages==1) {
        $htm = '<ul class="pagination">
                    <li class="disabled"><span>«</span></li>
                    <li class="active"><span>1</span></li>
                    <li class="disabled"><span>»</span></li>
                </ul>';
    } else if($pages==2) {
        if($page==1) {
            $htm = '<ul class="pagination">
                    <li class="disabled"><span>«</span></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="'.$url.'?page=2">2</a></li>
                    <li><a href="'.$url.'?page=2">»</a></li>
                </ul>';
        } else {
            $htm = '<ul class="pagination">
                    <li><a href="'.$url.'?page=1">«</a></li>
                    <li><a href="'.$url.'?page=1">1</a></li>
                    <li class="active"><span>2</span></li>
                    <li class="disabled"><span>»</span></li>
                </ul>';
        }
    } else if($pages==3) {
        if($page==1) {
            $htm = '<ul class="pagination">
                    <li class="disabled"><span>«</span></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="'.$url.'?page=2">2</a></li>
                    <li><a href="'.$url.'?page=3">3</a></li>
                    <li><a href="'.$url.'?page=3">»</a></li>
                </ul>';
        } else if($page==2) {
            $htm = '<ul class="pagination">
                    <li><a href="'.$url.'?page=1">«</a></li>
                    <li><a href="'.$url.'?page=1">1</a></li>
                    <li class="active"><span>2</span></li>
                    <li><a href="'.$url.'?page=3">3</a></li>
                    <li><a href="'.$url.'?page=3">»</a></li>
                </ul>';
        } else {
            $htm = '<ul class="pagination">
                    <li><a href="'.$url.'?page=1">«</a></li>
                    <li><a href="'.$url.'?page=1">1</a></li>
                    <li><a href="'.$url.'?page=2">2</a></li>
                    <li class="active"><span>3</span></li>
                    <li class="disabled"><span>»</span></li>
                </ul>';
        }
    } else if($pages>=4) {
        if($page==1) {  //当前第一页
            $htm = '<ul class="pagination">
                    <li class="disabled"><span>«</span></li>
                    <li class="active"><span>1</span></li>';
                    
                    for($i=2; $i<$pages; $i++) {
                        $htm .= '<li><a href="'.$url.'?page='.$i.'">'.$i.'</a></li>';
                    }

            $htm .= '<li><a href="'.$url.'?page='.$pages.'">'.$pages.'</a></li>
                    <li><a href="'.$url.'?page='.$pages.'">»</a></li>
                </ul>';
        } else if($page==$pages) {  //当前最后一页
            $htm = '<ul class="pagination">
                    <li><a href="'.$url.'?page=1">«</a></li>
                    <li><a href="'.$url.'?page=1">1</a></li>';

                    for($i=2; $i<$pages; $i++) {
                        $htm .= '<li><a href="'.$url.'?page='.$i.'">'.$i.'</a></li>';
                    }

            $htm .= '<li class="active"><span>'.$pages.'</span></li>
                    <li class="disabled"><span>»</span></li>
                </ul>';
        } else {
            $htm = '<ul class="pagination">
                    <li><a href="'.$url.'?page=1">«</a></li>
                    <li><a href="'.$url.'?page=1">1</a></li>';

                    for($i=2; $i<$pages; $i++) {
                        $htm .= '<li ';
                        if($i==$page) {
                            $htm .= 'class="active"';
                        }
                        $htm .= '><a href="'.$url.'?page='.$i.'">'.$i.'</a></li>';
                    }
                    
            $htm .= '<li><a href="'.$url.'?page='.$pages.'">'.$pages.'</a></li>
                    <li><a href="'.$url.'?page='.$pages.'">»</a></li>
                </ul>';
        }
    } else {
        $htm = '';
    }


    return $htm;
}

function lastdays($num=7) {
    $date = [];
    for($i=$num-1; $i>=0; $i--) {
        $date[] = date('Y-m-d', time() - 86400 * $i);
    }
    return $date;
}

function lastmonths($num=12) {
    $date = [];
    for($i=$num-1; $i>=0; $i--) {
        $date[] = date("Y-m",strtotime("-$i month"));
    }
    return $date;
}

