<?php

/**
 * This is the model class for table "int_users".
 *
 * The followings are the available columns in table 'int_users':
 * @property integer $userid
 * @property string $username
 * @property string $password
 * @property integer $active
 * @property string $activedescription
 * @property string $lastloginIP
 * @property string $lastloginDate
 * @property string $lastloginBrowser
 * @property integer $personid
 */
class Users extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'int_users';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('username, password', 'required'),
            array('active, personid', 'numerical', 'integerOnly' => true),
            array('username', 'length', 'max' => 45),
            array('password, activedescription', 'length', 'max' => 256),
            array('lastloginIP', 'length', 'max' => 11),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('username, active, activedescription, lastloginIP, lastloginDate, lastloginBrowser, personid', 'safe', 'on' => 'search'),
        );
    }

    public function beforeSave() {
        if ($this->isNewRecord) {
            $httpRequest = new CHttpRequest();
            $browser = Yii::app()->browser->getBrowser();
            $browser = Yii::app()->browser->getVersion();
            $browser = Yii::app()->browser->getPlatform();
            $this->active = 1;
            $this->activedescription = 'User Created';
            $this->lastloginIP = $httpRequest->getUserHostAddress();
            $this->lastloginBrowser = 'Browser: ' . $browser . ', Version: ' . $version . ', Plateform: ' . $platform;
            $this->password = crypt($this->password, "Bla_Bla@1234!@#");
        }
        return parent::beforeSave();
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'userid' => 'Userid',
            'username' => 'Username',
            'password' => 'Password',
            'active' => '0 - Disable
                         1 - Active
                         2 - Wrong password block
                         3 - Temporally block
                        ',
            'activedescription' => 'Activedescription',
            'lastloginIP' => 'Lastlogin Ip',
            'lastloginDate' => 'Lastlogin Date',
            'lastloginBrowser' => 'Lastlogin Browser',
            'personid' => 'Personid',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('userid', $this->userid);
        $criteria->compare('username', $this->username, true);
        $criteria->compare('password', $this->password, true);
        $criteria->compare('active', $this->active);
        $criteria->compare('activedescription', $this->activedescription, true);
        $criteria->compare('lastloginIP', $this->lastloginIP, true);
        $criteria->compare('lastloginDate', $this->lastloginDate, true);
        $criteria->compare('lastloginBrowser', $this->lastloginBrowser, true);
        $criteria->compare('personid', $this->personid);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Users the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
