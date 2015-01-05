<?php
/**
 * Created by PhpStorm.
 * User: goku
 * Date: 1/5/15
 * Time: 8:53 PM
 */

use Swagger\Annotations as SWG;

/**
 * @SWG\Model(
 *     id="Product",
 *     required="")
 */
class Product extends Eloquent
{
    /**
     * @SWG\Property(name="id", type="integer", format="int64", minimum="1",
     *     description="自增ID")
     */
    public $id;

    /**
     * @SWG\Property(name="name", type="string", description="产品名")
     */
    public $name;

    /**
     * @SWG\Property(name="description", type="string", description="产品描述")
     */
    public $description;

    /**
     * @SWG\Property(name="listingPrice", type="float", description="该价格包含任何优惠")
     */
    public $listingPrice;

    /**
     * @SWG\Property(name="shipping", type="float", description="运费")
     */
    public $shipping;

    /**
     * @SWG\Property(name="landedPrice", type="float", description="listing加上运费")
     */
    public $landedPrice;

    /**
     * @SWG\Property(name="regularPrice", type="float", description="该价格不包含任何优惠，不包含运费")
     */
    public $regularPrice;
}