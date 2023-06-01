<?php

namespace ktarila\ParameterValidatorBundle\Validator;

use ktarila\ParameterValidatorBundle\Attribute\ParamValidation;
use ReflectionMethod;
use Symfony\Component\Validator\ConstraintViolationList;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class ParameterValidation implements ValidationInterface
{
    public function __construct(private ValidatorInterface $validator)
    {
    }

    /**
     * @return array
     */
    private function readFieldsFromMethod(ReflectionMethod $reflectionMethod)
    {
        $attributes = $reflectionMethod->getAttributes(ParamValidation::class);
        $result = [];
        foreach ($attributes as $reflectionAttribute) {
            $attr[$reflectionAttribute->getName()] = $reflectionAttribute->getArguments();
            $result[] = $attr;
        }

        return $result;
    }

    public function validate(string $method, array $func_arguments): ConstraintViolationList
    {
        $reflectionMethod = new \ReflectionMethod($method);
        $attributeFields = $this->readFieldsFromMethod($reflectionMethod);
        $all_errors = new ConstraintViolationList();
        foreach ($attributeFields as $attributes) {
            foreach ($attributes as $key => $attrib) {
                $constraint = $attrib['constraint'];
                $validationClass = new $constraint['class']($constraint['parameters']);
                $error = $this->validator->validate(
                    $func_arguments[$attrib['position']],
                    $validationClass
                );

                if ($error->count() > 0) {
                    $all_errors->addAll($error);
                }
            }
        }

        return $all_errors;
    }
}
