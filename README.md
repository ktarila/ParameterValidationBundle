# Symfony Method Parameter Validation Bundle

A symfony Bundle that validates method parameters
using the symfony constraint validator class.

Validations are added as PHP8 attributes

Work In Progress

## Usage

```
use ktarila\ParameterValidatorBundle\Annotation\ParamValidation;
use ktarila\ParameterValidatorBundle\Annotation\ParamValidationFieldsReader;
use Symfony\Component\Validator\Constraints\Range;

class TestClass
{
    public function __construct(
        private ParamValidatorFieldsReader $paramValidatorFieldsReader
    ){}


    #[ParamValidation(
        position: 0,
        constraint: [
            'class' => Range::class,
            'parameters' => ['min' => 10, 'max' => 50],
        ]
    )]
    #[ParamValidation(
        position: 1,
        constraint: [
            'class' => Range::class,
            'parameters' => ['min' => 10, 'max' => 20],
        ]
    )]
    public function addTwoNumbers(int $x, int $y)
    {
        return $this->paramValidationFieldsReader->validate(__METHOD__, func_get_args());
    }

```
