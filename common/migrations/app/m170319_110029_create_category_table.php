<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m170319_110029_create_category_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('product_category', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'slug' => $this->string(255),
            'status' => $this->smallInteger()->defaultValue(1),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
        ]);
        //Seed data
        for ($i = 1; $i <= 5; $i++) {
            $this->insert('product_category', [
                'id' => $i,
                'name' => 'Product ' . $i,
                'slug' => 'product_' . $i,
                'created_at' => time(),
                'updated_at' => time(),
                'created_by' => 1,
                'updated_by' => 1
            ]);
        }

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('category');
    }
}
