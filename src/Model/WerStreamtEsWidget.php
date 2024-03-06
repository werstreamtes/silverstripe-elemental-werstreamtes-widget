<?php

namespace WSE\Elemental\Model {

    use DNADesign\Elemental\Models\BaseElement;
    use SilverStripe\GraphQL\Schema\Exception\SchemaBuilderException;
    use SilverStripe\ORM\ValidationException;

    /**
     * Fields definition
     *
     * @property string $URL
     * @property string $ShowTV
     * @property string $ShowDisc
     * @property string $ShowTrailer
     */
    class WerStreamtEsWidget extends BaseElement
    {

        /**
         * Defines the table name in the database.
         * Particularly useful for classes within a namespace.
         *
         * The table name is generated from the namespace and the class name:
         * XY\Elemental\ElementName becomes xy_elemental_elementname
         *
         * To avoid this, the table name can be overwritten here.
         *
         * @var string
         */
        private static string $table_name = 'WerStreamtEsWidgetElement';

        /**
         * @var string
         */
        private static string $icon = "font-icon-columns";

        /**
         * @var string
         */
        private static string $singular_name = "WerStreamt.es? Widget";

        /**
         * @var string
         */
        private static string $plural_name = "WerStreamt.es? Widget";

        /**
         * @var string[]
         */
        private static array $db = [
            "URL" => "Text",
            "ShowTrailer" => "Enum(array('Yes', 'No'), 'Yes')",
            "ShowTV" => "Enum(array('Yes', 'No'), 'Yes')",
            "ShowDisc" => "Enum(array('Yes', 'No'), 'Yes')",
        ];

        /**
         * @return string
         */
        public function getType(): string
        {
            return static::$plural_name;
        }


        /**
         * @return array
         * @throws ValidationException
         * @throws SchemaBuilderException
         */
        protected function provideBlockSchema(): array
        {
            $blockSchema = parent::provideBlockSchema();
            if ($this->URL) {
                $blockSchema["content"] = $this->URL;
            }
            return $blockSchema;
        }

        /**
         * @return string
         */
        public function getTitle(): string
        {
            return self::$singular_name;
        }

        /**
         * @return string
         */
        public function getClasses(): string {
            $classes = [];
            if ($this->ShowTV === "No") $classes[] = "wse-no-tv";
            if ($this->ShowDisc === "No") $classes[] = "wse-no-disc";
            if ($this->ShowTrailer === "No") $classes[] = "wse-no-trailer";
            return join(" ", $classes);
        }

    }

}