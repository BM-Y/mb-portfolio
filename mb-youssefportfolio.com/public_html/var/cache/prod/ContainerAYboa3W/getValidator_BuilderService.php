<?php

namespace ContainerAYboa3W;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getValidator_BuilderService extends App_KernelProdDebugContainer
{
    /**
     * Gets the private 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ValidatorBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Validation.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ContainerConstraintValidatorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ObjectInitializerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Validator/DoctrineInitializer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Mapping/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Mapping/Loader/AutoMappingTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Mapping/Loader/PropertyInfoLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyTypeExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyDescriptionExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyAccessExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyListExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyInfoExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyInitializableExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyInfoExtractor.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Validator/DoctrineLoader.php';

        $container->privates['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $a = new \Symfony\Component\PropertyInfo\PropertyInfoExtractor(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['property_info.reflection_extractor'] ??= new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor());
            yield 1 => ($container->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $container->load('getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService'));
        }, 2), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $container->load('getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService'));
            yield 1 => ($container->privates['property_info.reflection_extractor'] ??= new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor());
        }, 2), new RewindableGenerator(fn () => new \EmptyIterator(), 0), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $container->load('getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService'));
            yield 1 => ($container->privates['property_info.reflection_extractor'] ??= new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor());
        }, 2), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['property_info.reflection_extractor'] ??= new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor());
        }, 1));

        $instance->setConstraintValidatorFactory(new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService', true],
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => ['privates', 'validator.email', 'getValidator_EmailService', true],
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => ['privates', 'validator.expression', 'getValidator_ExpressionService', true],
            'Symfony\\Component\\Validator\\Constraints\\NoSuspiciousCharactersValidator' => ['privates', 'validator.no_suspicious_characters', 'getValidator_NoSuspiciousCharactersService', true],
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => ['privates', 'validator.not_compromised_password', 'getValidator_NotCompromisedPasswordService', true],
            'Symfony\\Component\\Validator\\Constraints\\WhenValidator' => ['privates', 'validator.when', 'getValidator_WhenService', true],
            'doctrine.orm.validator.unique' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService', true],
            'validator.expression' => ['privates', 'validator.expression', 'getValidator_ExpressionService', true],
        ], [
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\NoSuspiciousCharactersValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\WhenValidator' => '?',
            'doctrine.orm.validator.unique' => '?',
            'validator.expression' => '?',
        ])));
        $instance->setGroupProviderLocator(($container->privates['.service_locator.Xbsa8iG'] ??= new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [], [])));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings([(\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/config/validation.xml')]);
        $instance->enableAttributeMapping(true);
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers([new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(($container->services['doctrine'] ?? $container->load('getDoctrineService')))]);
        $instance->addLoader(new \Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader($a, $a, $a, NULL));
        $instance->addLoader(new \Symfony\Bridge\Doctrine\Validator\DoctrineLoader(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')), NULL));

        return $instance;
    }
}
