<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product`.
 */
class m170319_124003_create_product_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'slug' => $this->string(255),
            'category_id' => $this->integer()->notNull(),
            'description' => $this->text(),
            'price' => $this->decimal(20, 3),
            'image_base_url' => $this->string(255),
            'image_base_path' => $this->string(255),
            'status' => $this->smallInteger()->defaultValue(1),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('product');
    }
}
