<?php
namespace Ecrmnn\Lorem;

class Lorem
{
    /**
     * @param int $paragraphs
     * @return string
     */
    public function html($paragraphs = 1)
    {
        $html = '';
        $numberOfParagraphs = count($this->paragraphs());

        for ($i = 0; $i < $paragraphs; $i++) {
            $index = $i % $numberOfParagraphs;

            $html .= '<p>' . $this->paragraphs()[$index] . '</p>';
        }

        return $html;
    }

    /**
     * @param int $width
     * @param null $height
     * @param array $attributes
     * @return string
     */
    public function image($width = 1024, $height = null, $attributes = [])
    {
        if (is_null($height)) {
            $height = $width;
        }

        return '<img src="https://unsplash.it/' . $width . '/' . $height .
        '/?random" alt="Lorem"' . $this->addAttributes($attributes) . '>';
    }

    /**
     * @param $attributes
     * @return string
     */
    private function addAttributes($attributes)
    {
        $attr = ' ';

        foreach ($attributes as $attribute => $value) {
            if (is_integer($attribute)) {
                $attr .= $value . ' ';
            } else {
                $attr .= $attribute . '="' . $value . '" ';
            }
        }

        return rtrim($attr);
    }

    /**
     * @return array
     */
    private function paragraphs()
    {
        return [
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed urna arcu. Integer sit amet risus
            nisi. Nulla ut consequat quam. Etiam at facilisis metus, id lobortis elit. Donec vel nulla egestas,
            malesuada arcu vel, pellentesque augue. Nullam quis dapibus neque. Vestibulum ante ipsum primis in faucibus
            orci luctus et ultrices posuere cubilia Curae;',
            'Phasellus lectus ligula, congue at sapien nec, cursus mattis leo. Pellentesque et nisi dui. Etiam
            consequat dui ut lacinia congue. Nam facilisis nisi non ultricies congue. Fusce porttitor laoreet nisl,
            nec bibendum eros semper eget. Morbi at libero at purus posuere imperdiet a non nulla. Ut consectetur nulla
            interdum ipsum consectetur dapibus. Cras hendrerit eros sed ligula volutpat dictum. Sed scelerisque nibh
            vel ipsum aliquet dignissim. Nullam tristique sollicitudin dolor at eleifend. Aenean posuere, orci at
            condimentum cursus, nulla eros imperdiet dolor, vitae vulputate est nisi id justo.',
            'Morbi porta aliquam risus vel convallis. Nullam est mi, tempus sit amet velit vitae, bibendum condimentum
            tellus. Donec accumsan ultrices sem, sit amet scelerisque quam tempor eget. Fusce ligula risus, facilisis
            id suscipit a, sodales eu purus. Cras commodo tellus purus, eget sodales nulla lobortis et. Suspendisse
            ultricies tellus ligula, et dignissim metus tristique maximus. Suspendisse massa diam, sollicitudin eget
            ullamcorper quis, eleifend eu odio. Cras vestibulum, enim vitae faucibus gravida, leo nibh gravida dolor,
            ac venenatis justo est quis risus. Proin risus neque, ultrices sed ante id, facilisis pulvinar velit.
            Etiam et dui consectetur, molestie nibh et, ultricies enim. Donec accumsan in urna eget pretium.
            Vestibulum purus odio, ultrices id mattis quis, tempus vitae sapien.',
            'Vestibulum eget venenatis metus. Proin mattis odio vel est sodales luctus. Aliquam sed nunc mattis,
            accumsan nisi eu, maximus diam. Vestibulum malesuada tincidunt odio. Ut mattis nisi nunc, quis venenatis
            nunc tempor sed. Suspendisse molestie, nibh eget congue interdum, lacus tellus pellentesque mi, eu rutrum
            ipsum ligula eget turpis. Mauris suscipit pulvinar dignissim. Donec ultrices sed enim eu eleifend. Aliquam
            porta bibendum placerat. Maecenas bibendum est at tristique efficitur. Nunc luctus scelerisque maximus.
            Vestibulum at sodales lectus, quis efficitur dolor. Phasellus id consectetur tortor. Sed leo odio, tempor
            in nunc ut, tincidunt vestibulum quam.',
            'In at ultrices libero. Ut id orci tincidunt, pellentesque sapien id, iaculis sapien. Ut auctor facilisis
            egestas. Sed facilisis ac nibh non fringilla. Vivamus pellentesque ultricies ornare. Duis dignissim quam
            nisl, id facilisis lacus consequat ut. Etiam ornare lorem quis elementum mollis. Aenean ligula justo,
            vestibulum id risus non, porta consectetur urna. Aliquam quis est quis ex vehicula rutrum blandit sit amet
            nisl. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi
            arcu massa, vestibulum ac magna eget, luctus tincidunt sem. Phasellus convallis, est at laoreet dictum,
            magna ex vehicula urna, ac ullamcorper metus lorem eget tellus. Pellentesque vel placerat tortor. Nam
            ultrices scelerisque est sed commodo.',
            'Phasellus ligula enim, pretium sed vehicula ac, lobortis vitae odio. Sed at tristique elit, id volutpat
            arcu. Phasellus tellus velit, mollis sit amet tortor vel, fermentum mattis sem. Pellentesque tortor purus,
            porta suscipit quam id, tempor ullamcorper ex. Sed dignissim leo in ligula mattis, id ornare eros mollis.
            Proin malesuada tortor eget luctus venenatis. Suspendisse potenti. Pellentesque libero purus, commodo ac
            rhoncus et, aliquam eu urna. Cras et dolor semper, hendrerit mi at, scelerisque tortor. Morbi ac risus
            metus. Etiam odio magna, suscipit id feugiat ut, elementum quis leo. Donec imperdiet velit nunc, ac
            pulvinar magna imperdiet vitae. Nullam nisl ex, tempus ac facilisis non, mattis id sapien. Nulla eget
            finibus urna, id ullamcorper ex.',
            'Phasellus nec consectetur ipsum. Nunc vel erat nisi. Cras ultrices mi eget egestas maximus. Suspendisse
            malesuada sit amet metus rhoncus rutrum. Donec convallis venenatis lorem. Vestibulum lorem eros, pulvinar
            et maximus eget, sagittis sit amet felis. Pellentesque aliquam risus in augue faucibus lacinia. Nam euismod
            tellus non odio pulvinar, lobortis pellentesque augue fringilla. Pellentesque vitae nunc egestas, euismod
            eros quis, porttitor odio.',
            'Phasellus gravida erat orci, euismod varius nisl hendrerit et. Etiam bibendum commodo interdum. Praesent
            ornare nunc ac porta porttitor. Morbi venenatis dui tortor, ut vehicula nunc finibus vitae. Cras ante
            justo, vulputate at quam eget, tristique rutrum purus. Nulla laoreet lacus id dui mattis ultrices. Proin
            iaculis justo leo, eu ornare metus suscipit eget. Donec lobortis ipsum ac arcu sagittis, sit amet varius
            metus pulvinar. Suspendisse nec pulvinar odio, nec lobortis nunc.',
            'Vestibulum sit amet lectus neque. Nunc eget urna eleifend nisi facilisis porta. Pellentesque ac ipsum at
            orci volutpat imperdiet. Aenean fringilla tristique sapien, ut pellentesque mi vestibulum non. Phasellus
            non nibh justo. Nunc iaculis ullamcorper scelerisque. Vivamus consectetur suscipit arcu, eu vehicula ante
            volutpat ac. Aenean sit amet quam a magna accumsan auctor. Maecenas dictum aliquet venenatis.',
            'Duis ornare tempor orci, ut pharetra magna condimentum a. Duis in eros purus. Cras ut neque quis nunc
            porttitor bibendum. In ultricies elementum ligula, ut porta elit suscipit id. Curabitur mauris justo,
            tincidunt eu felis luctus, feugiat efficitur ante. Proin in massa odio. Fusce eros magna, rhoncus a
            consectetur id, tincidunt eu turpis. Donec tempor magna eget justo lacinia porttitor. Proin ac ipsum
            lobortis, tristique turpis ac, vestibulum sapien. Phasellus nulla nulla, condimentum bibendum sapien
            in, vestibulum ornare ipsum. Nam quis pretium turpis. Vivamus at luctus ex. Quisque eget diam sed massa
            tempor consectetur. Morbi finibus sem libero, laoreet vehicula dui molestie ut. Vestibulum ante ipsum
            primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed sem urna, pretium ac tincidunt
            ornare, suscipit vitae lorem.'
        ];
    }
}
