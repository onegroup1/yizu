<?php
namespace Home\Model;
use Think\Model;
class IndexModel extends Model{
    public function sel($u_id){
        return $this->query("select oa_power.p_name,oa_power.method,oa_power.p_path,oa_power.power_id
from oa_power inner join r_p on
r_p.power_id=oa_power.power_id INNER JOIN
u_r on u_r.role_id=r_p.role_id WHERE
u_r.user_id='$u_id'");
    }
}
?>