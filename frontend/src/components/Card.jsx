function Card({ title, description, children, className = "" }) {
  return (
    <div className={`rounded-2xl shadow-md p-6  ${className}`}>
      {title && <h2 className="text-xl font-semibold mb-2">{title}</h2>}
      {description && (
        <p className="text-sm text-gray-600 mb-4">{description}</p>
      )}
      {children}
    </div>
  );
}

export default Card;
