<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: store.proto

namespace Store\Grpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>go.micro.srv.store.v1.OfflineStore</code>
 */
class OfflineStore extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>string title = 2;</code>
     */
    protected $title = '';
    /**
     * Generated from protobuf field <code>int32 type = 3;</code>
     */
    protected $type = 0;
    /**
     * Generated from protobuf field <code>int32 level = 4;</code>
     */
    protected $level = 0;
    /**
     * Generated from protobuf field <code>string cover = 5;</code>
     */
    protected $cover = '';
    /**
     * Generated from protobuf field <code>string province_name = 6;</code>
     */
    protected $province_name = '';
    /**
     * Generated from protobuf field <code>string city_name = 7;</code>
     */
    protected $city_name = '';
    /**
     * Generated from protobuf field <code>string area_name = 8;</code>
     */
    protected $area_name = '';
    /**
     * Generated from protobuf field <code>int32 province_code = 9;</code>
     */
    protected $province_code = 0;
    /**
     * Generated from protobuf field <code>int32 city_code = 10;</code>
     */
    protected $city_code = 0;
    /**
     * Generated from protobuf field <code>int32 area_code = 11;</code>
     */
    protected $area_code = 0;
    /**
     * Generated from protobuf field <code>string address = 12;</code>
     */
    protected $address = '';
    /**
     * Generated from protobuf field <code>string tel = 13;</code>
     */
    protected $tel = '';
    /**
     * Generated from protobuf field <code>string gcj_02 = 14;</code>
     */
    protected $gcj_02 = '';
    /**
     * Generated from protobuf field <code>string location = 15;</code>
     */
    protected $location = '';
    /**
     * Generated from protobuf field <code>int32 district_id = 16;</code>
     */
    protected $district_id = 0;
    /**
     * Generated from protobuf field <code>string wechat = 17;</code>
     */
    protected $wechat = '';
    /**
     * Generated from protobuf field <code>string reply = 18;</code>
     */
    protected $reply = '';
    /**
     * Generated from protobuf field <code>string remark = 19;</code>
     */
    protected $remark = '';
    /**
     * Generated from protobuf field <code>string styles = 20;</code>
     */
    protected $styles = '';
    /**
     * Generated from protobuf field <code>string introduction = 21;</code>
     */
    protected $introduction = '';
    /**
     * Generated from protobuf field <code>string price_desc = 22;</code>
     */
    protected $price_desc = '';
    /**
     * Generated from protobuf field <code>string brand_desc = 23;</code>
     */
    protected $brand_desc = '';
    /**
     * Generated from protobuf field <code>string product_desc = 24;</code>
     */
    protected $product_desc = '';
    /**
     * Generated from protobuf field <code>string business_time = 25;</code>
     */
    protected $business_time = '';
    /**
     * Generated from protobuf field <code>int32 articles = 26;</code>
     */
    protected $articles = 0;
    /**
     * Generated from protobuf field <code>int32 evaluations = 27;</code>
     */
    protected $evaluations = 0;
    /**
     * Generated from protobuf field <code>int32 items = 28;</code>
     */
    protected $items = 0;
    /**
     * Generated from protobuf field <code>int32 real_clicks = 29;</code>
     */
    protected $real_clicks = 0;
    /**
     * Generated from protobuf field <code>int32 clicks = 30;</code>
     */
    protected $clicks = 0;
    /**
     * Generated from protobuf field <code>int32 images = 31;</code>
     */
    protected $images = 0;
    /**
     * Generated from protobuf field <code>int32 videoes = 32;</code>
     */
    protected $videoes = 0;
    /**
     * Generated from protobuf field <code>int32 created_at = 33;</code>
     */
    protected $created_at = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $id
     *     @type string $title
     *     @type int $type
     *     @type int $level
     *     @type string $cover
     *     @type string $province_name
     *     @type string $city_name
     *     @type string $area_name
     *     @type int $province_code
     *     @type int $city_code
     *     @type int $area_code
     *     @type string $address
     *     @type string $tel
     *     @type string $gcj_02
     *     @type string $location
     *     @type int $district_id
     *     @type string $wechat
     *     @type string $reply
     *     @type string $remark
     *     @type string $styles
     *     @type string $introduction
     *     @type string $price_desc
     *     @type string $brand_desc
     *     @type string $product_desc
     *     @type string $business_time
     *     @type int $articles
     *     @type int $evaluations
     *     @type int $items
     *     @type int $real_clicks
     *     @type int $clicks
     *     @type int $images
     *     @type int $videoes
     *     @type int $created_at
     * }
     */
    public function __construct($data = NULL) {
        \Store\Grpc\GPBMetadata\Store::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string title = 2;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Generated from protobuf field <code>string title = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 type = 3;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>int32 type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkInt32($var);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 level = 4;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Generated from protobuf field <code>int32 level = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkInt32($var);
        $this->level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string cover = 5;</code>
     * @return string
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * Generated from protobuf field <code>string cover = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setCover($var)
    {
        GPBUtil::checkString($var, True);
        $this->cover = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string province_name = 6;</code>
     * @return string
     */
    public function getProvinceName()
    {
        return $this->province_name;
    }

    /**
     * Generated from protobuf field <code>string province_name = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setProvinceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->province_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string city_name = 7;</code>
     * @return string
     */
    public function getCityName()
    {
        return $this->city_name;
    }

    /**
     * Generated from protobuf field <code>string city_name = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setCityName($var)
    {
        GPBUtil::checkString($var, True);
        $this->city_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string area_name = 8;</code>
     * @return string
     */
    public function getAreaName()
    {
        return $this->area_name;
    }

    /**
     * Generated from protobuf field <code>string area_name = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setAreaName($var)
    {
        GPBUtil::checkString($var, True);
        $this->area_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 province_code = 9;</code>
     * @return int
     */
    public function getProvinceCode()
    {
        return $this->province_code;
    }

    /**
     * Generated from protobuf field <code>int32 province_code = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setProvinceCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->province_code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 city_code = 10;</code>
     * @return int
     */
    public function getCityCode()
    {
        return $this->city_code;
    }

    /**
     * Generated from protobuf field <code>int32 city_code = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setCityCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->city_code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 area_code = 11;</code>
     * @return int
     */
    public function getAreaCode()
    {
        return $this->area_code;
    }

    /**
     * Generated from protobuf field <code>int32 area_code = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setAreaCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->area_code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string address = 12;</code>
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Generated from protobuf field <code>string address = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string tel = 13;</code>
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Generated from protobuf field <code>string tel = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setTel($var)
    {
        GPBUtil::checkString($var, True);
        $this->tel = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string gcj_02 = 14;</code>
     * @return string
     */
    public function getGcj02()
    {
        return $this->gcj_02;
    }

    /**
     * Generated from protobuf field <code>string gcj_02 = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setGcj02($var)
    {
        GPBUtil::checkString($var, True);
        $this->gcj_02 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string location = 15;</code>
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Generated from protobuf field <code>string location = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->location = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 district_id = 16;</code>
     * @return int
     */
    public function getDistrictId()
    {
        return $this->district_id;
    }

    /**
     * Generated from protobuf field <code>int32 district_id = 16;</code>
     * @param int $var
     * @return $this
     */
    public function setDistrictId($var)
    {
        GPBUtil::checkInt32($var);
        $this->district_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string wechat = 17;</code>
     * @return string
     */
    public function getWechat()
    {
        return $this->wechat;
    }

    /**
     * Generated from protobuf field <code>string wechat = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setWechat($var)
    {
        GPBUtil::checkString($var, True);
        $this->wechat = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string reply = 18;</code>
     * @return string
     */
    public function getReply()
    {
        return $this->reply;
    }

    /**
     * Generated from protobuf field <code>string reply = 18;</code>
     * @param string $var
     * @return $this
     */
    public function setReply($var)
    {
        GPBUtil::checkString($var, True);
        $this->reply = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string remark = 19;</code>
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Generated from protobuf field <code>string remark = 19;</code>
     * @param string $var
     * @return $this
     */
    public function setRemark($var)
    {
        GPBUtil::checkString($var, True);
        $this->remark = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string styles = 20;</code>
     * @return string
     */
    public function getStyles()
    {
        return $this->styles;
    }

    /**
     * Generated from protobuf field <code>string styles = 20;</code>
     * @param string $var
     * @return $this
     */
    public function setStyles($var)
    {
        GPBUtil::checkString($var, True);
        $this->styles = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string introduction = 21;</code>
     * @return string
     */
    public function getIntroduction()
    {
        return $this->introduction;
    }

    /**
     * Generated from protobuf field <code>string introduction = 21;</code>
     * @param string $var
     * @return $this
     */
    public function setIntroduction($var)
    {
        GPBUtil::checkString($var, True);
        $this->introduction = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string price_desc = 22;</code>
     * @return string
     */
    public function getPriceDesc()
    {
        return $this->price_desc;
    }

    /**
     * Generated from protobuf field <code>string price_desc = 22;</code>
     * @param string $var
     * @return $this
     */
    public function setPriceDesc($var)
    {
        GPBUtil::checkString($var, True);
        $this->price_desc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string brand_desc = 23;</code>
     * @return string
     */
    public function getBrandDesc()
    {
        return $this->brand_desc;
    }

    /**
     * Generated from protobuf field <code>string brand_desc = 23;</code>
     * @param string $var
     * @return $this
     */
    public function setBrandDesc($var)
    {
        GPBUtil::checkString($var, True);
        $this->brand_desc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string product_desc = 24;</code>
     * @return string
     */
    public function getProductDesc()
    {
        return $this->product_desc;
    }

    /**
     * Generated from protobuf field <code>string product_desc = 24;</code>
     * @param string $var
     * @return $this
     */
    public function setProductDesc($var)
    {
        GPBUtil::checkString($var, True);
        $this->product_desc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string business_time = 25;</code>
     * @return string
     */
    public function getBusinessTime()
    {
        return $this->business_time;
    }

    /**
     * Generated from protobuf field <code>string business_time = 25;</code>
     * @param string $var
     * @return $this
     */
    public function setBusinessTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 articles = 26;</code>
     * @return int
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * Generated from protobuf field <code>int32 articles = 26;</code>
     * @param int $var
     * @return $this
     */
    public function setArticles($var)
    {
        GPBUtil::checkInt32($var);
        $this->articles = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 evaluations = 27;</code>
     * @return int
     */
    public function getEvaluations()
    {
        return $this->evaluations;
    }

    /**
     * Generated from protobuf field <code>int32 evaluations = 27;</code>
     * @param int $var
     * @return $this
     */
    public function setEvaluations($var)
    {
        GPBUtil::checkInt32($var);
        $this->evaluations = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 items = 28;</code>
     * @return int
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Generated from protobuf field <code>int32 items = 28;</code>
     * @param int $var
     * @return $this
     */
    public function setItems($var)
    {
        GPBUtil::checkInt32($var);
        $this->items = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 real_clicks = 29;</code>
     * @return int
     */
    public function getRealClicks()
    {
        return $this->real_clicks;
    }

    /**
     * Generated from protobuf field <code>int32 real_clicks = 29;</code>
     * @param int $var
     * @return $this
     */
    public function setRealClicks($var)
    {
        GPBUtil::checkInt32($var);
        $this->real_clicks = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 clicks = 30;</code>
     * @return int
     */
    public function getClicks()
    {
        return $this->clicks;
    }

    /**
     * Generated from protobuf field <code>int32 clicks = 30;</code>
     * @param int $var
     * @return $this
     */
    public function setClicks($var)
    {
        GPBUtil::checkInt32($var);
        $this->clicks = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 images = 31;</code>
     * @return int
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Generated from protobuf field <code>int32 images = 31;</code>
     * @param int $var
     * @return $this
     */
    public function setImages($var)
    {
        GPBUtil::checkInt32($var);
        $this->images = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 videoes = 32;</code>
     * @return int
     */
    public function getVideoes()
    {
        return $this->videoes;
    }

    /**
     * Generated from protobuf field <code>int32 videoes = 32;</code>
     * @param int $var
     * @return $this
     */
    public function setVideoes($var)
    {
        GPBUtil::checkInt32($var);
        $this->videoes = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 created_at = 33;</code>
     * @return int
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Generated from protobuf field <code>int32 created_at = 33;</code>
     * @param int $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkInt32($var);
        $this->created_at = $var;

        return $this;
    }

}

