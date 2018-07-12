<?php
namespace app\modules\models;

use yii\db\ActiveRecord;

class Admin extends ActiveRecord
{
    public $rememberMe = true;

    public function rules()
    {
        return [
            'adminuser', 'required', '管理员账号不能为空',
            'adminpass', 'required', '管理员密码不能为空',
            'rememberMe', 'boolean',
            'adminpass', 'validatePass', '管理员密码不正确'
        ];
    }

    public function login($data)
    {

    }

    public function validatePass()
    {
        if (!$this->hasErrors()) {
            $data = self::find()->where('adminuser = ? and adminpass = ?', [$this->adminuser, $this->adminpass])->one();
            if (is_null($data)) {
                return false;
            }
            return true;
        }
        return false;
    }
}
